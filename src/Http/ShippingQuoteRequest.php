<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\Address;
use Omniship\Consts;
use Omniship\Econt\Helper\Convert;

class ShippingQuoteRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData()
    {

        $convert = new Convert();

        $data = [];
        $data['system']['validate'] = 1;
        $data['system']['response_type'] = 'XML';
        $data['system']['only_calculate'] = 1;
        $data['system']['process_all_parcels'] = 1;

        $row = [];
        $from = $to = 'OFFICE';

        //from address
        $sender_address = $this->getSenderAddress();
        $row['sender'] = $this->formatAddress($sender_address);
        if (empty($row['sender']['office_code'])) {
            $from = 'DOOR';
        }

        //to address
        $receiver_address = $this->getReceiverAddress();
        $row['receiver'] = $this->formatAddress($receiver_address);
        if (empty($row['receiver']['office_code'])) {
            $to = 'DOOR';
        }

        $row['receiver']['email'] = $this->getReceiverEmail();
        $row['receiver']['sms_no'] = $this->getOtherParameters('sms_no');

        $row['shipment']['envelope_num'] = $this->getPackageType();
        $row['shipment']['description'] = $this->getContent();
        $row['shipment']['pack_count'] = $this->getNumberOfPieces();
        $row['shipment']['weight'] = $convert->convertWeightUnit($this->getWeight(), $this->getWeightUnit());

        $row['shipment']['invoice_before_pay_CD'] = (int)$this->getOtherParameters('invoice_before_cd');
        $row['shipment']['pay_after_accept'] = (int)($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_OPEN);
        $row['shipment']['pay_after_test'] = (int)($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_TEST);

        //ако клиента откаже пратката как да се поемат разноските по пратката. Възможни стойности: delivery_return - доставката и връщането да са за моя сметка да са за сметка на подателя; return – само връщането да е за сметка на подателя
        $row['instructions'] = [];
        if($row['shipment']['pay_after_accept']) {
            $row['instructions'][0]['e']['type'] = 'return';
            $row['instructions'][0]['e']['delivery_fail_action'] = 'return_to_sender';
            $row['instructions'][0]['e']['reject_delivery_payment_side'] = 'receiver';
            $row['instructions'][0]['e']['reject_return_payment_side'] = 'receiver';
            if ($this->getOtherParameters('instruction_returns') == 'delivery_return') {
                $row['instructions'][0]['e']['reject_delivery_payment_side'] = 'sender';
                $row['instructions'][0]['e']['reject_return_payment_side'] = 'sender';
            } else if ($this->getOtherParameters('instruction_returns') == 'return') {
                $row['instructions'][0]['e']['reject_return_payment_side'] = 'sender';
            }
        }

        $instructions = $this->getOtherParameters('instructions');
        if($instructions) {
            $total_instructions = count($row['instructions']);
            foreach($instructions AS $row => $instruction) {
                $row['instructions'][$total_instructions++]['e'] = $instruction;
            }
        }

        $row['shipment']['tariff_sub_code'] = $from . '_' . $to;
        $tariff_code = 0;
        if ($row['shipment']['tariff_sub_code'] == 'OFFICE_OFFICE') {
            $tariff_code = 2;
        } elseif ($row['shipment']['tariff_sub_code'] == 'DOOR_OFFICE') {
            $tariff_code = 3;
        }
        $row['shipment']['tariff_code'] = $tariff_code;

        if ($row['shipment']['weight'] >= 50) {
            $row['shipment']['shipment_type'] = 'CARGO';
            $row['shipment']['cargo_code'] = 81;
        } elseif ($row['shipment']['weight'] <= 20 && $row['shipment']['tariff_sub_code'] == 'OFFICE_OFFICE') {
            $row['shipment']['shipment_type'] = 'POST_PACK';
        } else {
            $row['shipment']['shipment_type'] = 'PACK';
        }

        /*
         * delivery_day – Дата за доставка на пратката - възможните стойности са:
         * - work_day – първия работен ден, half_day – първия работен ден или ден с дежурства;
         * или някоя датите върнати от запитване „информация кои са дните за разнос по дадена дата”. По
         * подразбиране се взема първата възможна дата за доставка.
         */
        $row['shipment']['delivery_day'] = '';

        //@todo CASH, CREDIT, BONUS (бонус точки), VOUCHE (ваучери)
        $row['payment']['method'] = $this->getPaymentMethod() ? : Consts::PAYMENT_CASH; // CASH, CREDIT, BONUS (бонус точки), VOUCHER (ваучери)
        $row['payment']['side'] = $this->getPayer();
        $row['payment']['key_word'] = $row['payment']['method'] == Consts::PAYMENT_CREDIT ? $this->getOtherParameters('credit_account_number') : '';

        $row['services']['dc'] = $this->getBackReceipt() ? 'On' : ''; //обратна разписка;
        $row['services']['dc_cp'] = $this->getBackDocuments() ? 'On' : ''; // стокова разписка;

        if ($oc = $this->getDeclaredAmount()) {
            $row['services']['oc'] = $oc;
            $row['services']['oc_currency'] = $this->getDeclaredCurrency();
        } elseif($oc = $this->getInsuranceAmount()) {
            $row['services']['oc'] = $oc;
            $row['services']['oc_currency'] = $this->getInsuranceCurrency();
        } else {
            $row['services']['oc'] = '';
            $row['services']['oc_currency'] = '';
        }

        if ($cd = $this->getCashOnDeliveryAmount()) {
            $row['services']['cd'] = array('type' => 'GET', 'value' => $cd);
            $row['services']['cd_currency'] = $this->getCashOnDeliveryCurrency();
            $row['services']['cd_agreement_num'] = $this->getOtherParameters('cod_account_number') ?: '';
        } else {
            $row['services']['cd'] = array('type' => '', 'value' => '');
            $row['services']['cd_currency'] = '';
            $row['services']['cd_agreement_num'] = '';
        }
        for($i = 1; $i <= 8; $i++) {
            $row['services']['pack' . $i] = $this->getOtherParameters('pack_' . $i);
        }
        $row['services']['ref'] = $this->getOtherParameters('ref');

        for($i = 0; $i <= 3; $i++) {
            $row['services']['e' . ($i ? : '')] = $this->getOtherParameters('express_city_courier_e') == 'e' . ($i ? : '') ? 'On' : '';
        }

        if (($priority_time_value = $this->getOtherParameters('priority_time_value')) instanceof Carbon) {
            $row['services']['p'] = array('type' => $this->validatePriorityTimeType($this->getOtherParameters('priority_time_type')), 'value' => $priority_time_value->format('H:i'));
        } else {
            $row['services']['p'] = array('type' => '', 'value' => '');
        }

        $data['loadings']['row'] = $row;

        return $data;
    }

    public function sendData($data)
    {
        $tracking = $this->getClient()->calculate($data);
        return $this->createResponse($tracking ? $tracking : $this->getClient()->getError());
    }

    /**
     * @param $data
     * @return ShippingQuoteResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingQuoteResponse($this, $data);
    }

    /**
     * @param Address|null $address
     * @return array
     */
    protected function formatAddress(Address $address = null)
    {
        $row = [];
        if ($address) {
            if (!is_null($office = $address->getOffice()) && $office->getId()) {
                $row['office_code'] = $office->getId();
            }
            if (!is_null($country = $address->getCountry())) {
                $row['country_code'] = $country->getIso3();
            }
            if (!is_null($city = $address->getCity())) {
                $row['city'] = $city->getName();
            } else {
                $row['city'] = '';
            }
            if (!is_null($quarter = $address->getQuarter())) {
                $row['quarter'] = $quarter->getName();
            } else {
                $row['quarter'] = '';
            }
            if (!is_null($street = $address->getStreet())) {
                $row['street'] = $street->getName();
            } else {
                $row['street'] = '';
            }

            $row['post_code'] = $address->getPostCode();
            $row['address_zip'] = $address->getPostCode();
            $row['street_num'] = $address->getStreetNumber();
            $row['street_bl'] = $address->getBuilding();
            $row['street_vh'] = $address->getEntrance();
            $row['street_et'] = $address->getFloor();
            $row['street_ap'] = $address->getApartment();
            $row['street_other'] = implode(' ', array_filter([$address->getAddress1(), $address->getAddress2(), $address->getAddress3()]));
            if ($company = $address->getCompanyName()) {
                $row['name'] = $address->getCompanyName();
                $row['name_person'] = $address->getFirstName() . ' ' . $address->getLastName();
            } else {
                $row['name'] = $address->getFirstName() . ' ' . $address->getLastName();
            }
            $row['phone_num'] = $address->getPhone();
        }

        return $row;
    }

    /**
     * @param $in
     * @return string
     */
    protected function validatePriorityTimeType($in) {
        if(in_array(($in = strtoupper($in)), ['IN', 'BEFORE', 'AFTER'])) {
            return $in;
        }
        return 'IN';
    }

}