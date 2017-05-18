<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Econt\Http;

use Omniship\Common\ItemBag;

class ShippingServicesRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData() {
        $data = [];
        $data['system']['validate'] = 1;
        $data['system']['response_type'] = 'XML';
        $data['system']['only_calculate'] = 1;

        $row = [];
        $from = $to = 'OFFICE';
        $sender_address = $this->getSenderAddress();
        if($office_id = $sender_address->getParameter('office_id')) {
            $row['sender']['office_code'] = $office_id;
        } else {
            $from = 'DOOR';
        }
        $row['sender']['country_code'] = $sender_address->getCountry()->getIso3();
        $row['sender']['city'] = $sender_address->getCity()->getName();
        $row['sender']['post_code'] = $sender_address->getPostCode();
        $row['sender']['quarter'] = $sender_address->getParameter('quarter');
        $row['sender']['street'] = $sender_address->getParameter('street');
        $row['sender']['street_num'] = $sender_address->getParameter('street_num');
        $row['sender']['street_bl'] = '';
        $row['sender']['street_vh'] = '';
        $row['sender']['street_et'] = '';
        $row['sender']['street_ap'] = '';
        $row['sender']['street_other'] = implode(' ', array_filter([$sender_address->getAddress1(), $sender_address->getAddress2(), $sender_address->getAddress3()]));
        $row['sender']['name'] = $sender_address->getCompanyName();
        $row['sender']['name_person'] = $sender_address->getFirstName() . ' ' . $sender_address->getLastName();
        $row['sender']['phone_num'] = $sender_address->getPhone();

        $receiver_address = $this->getReceiverAddress();
        if($office_id = $receiver_address->getParameter('office_id')) {
            $row['receiver']['office_code'] = $office_id;
        } else {
            $to = 'DOOR';
        }
        $row['receiver']['country_code'] = $receiver_address->getCountry()->getIso3();
        $row['receiver']['city'] = $receiver_address->getCity()->getName();
        $row['receiver']['post_code'] = $receiver_address->getPostCode();
        $row['receiver']['address_zip'] = $receiver_address->getPostCode();
        $row['receiver']['quarter'] = $receiver_address->getParameter('quarter');
        $row['receiver']['street'] = $receiver_address->getParameter('street');
        $row['receiver']['street_num'] = $receiver_address->getParameter('street_num');
        $row['receiver']['street_bl'] = '';
        $row['receiver']['street_vh'] = '';
        $row['receiver']['street_et'] = '';
        $row['receiver']['street_ap'] = '';
        $row['receiver']['street_other'] = implode(' ', array_filter([$receiver_address->getAddress1(), $receiver_address->getAddress2(), $receiver_address->getAddress3()]));
        $row['receiver']['name'] = $receiver_address->getCompanyName();
        $row['receiver']['name_person'] = $receiver_address->getFirstName() . ' ' . $receiver_address->getLastName();
        $row['receiver']['email'] = $this->getOtherParameters('receiver_email');
        $row['receiver']['phone_num'] = $receiver_address->getPhone();
        $row['receiver']['sms_no'] = $this->getOtherParameters('sms_no');

        $row['shipment']['envelope_num'] = '';
        /** @var $items ItemBag */
        $items = $this->getItems();
        if($items && $items->count()) {
            $description = [];
            foreach($items->all() AS $item) {
                $description[] = $item->getName();
            }
            $row['shipment']['description'] = implode(', ', $description);
            $row['shipment']['pack_count'] = $items->count();
        } else {
            $row['shipment']['pack_count'] = 0;
        }
        $row['shipment']['weight'] = $weight = $this->getWeight();

        /*
         * shipment_type – тип на пратката. Възможни стойности за куриерски пратки :
         * PACK – колет, DOCUMENT - документи, PALLET – палет, CARGO – карго експрес, DOCUMENTPALLET –
         * палет + документи ;
         * За пощенски пратки:  SMALL_ENVELOPE – малко писмо, BIG_ENVELOPE – голямо писмо, POST_PACK -
         * колет, PRESS – печатни произведения, ADV – пряка пощенска реклама, SECOGRAM – секограма;
         * MONEY_TRANSFER – паричен превод;
         */
        if ($weight > 100) {
            $row['shipment']['shipment_type'] = 'CARGO';
            $row['shipment']['cargo_code'] = 81;
        } else {
            $row['shipment']['shipment_type'] = 'PACK';
        }

        $row['shipment']['invoice_before_pay_CD'] = (int)$this->getOtherParameters('invoice_before_cd');
        $row['shipment']['pay_after_accept'] = (int)$this->getOtherParameters('pay_after_accept');
        $row['shipment']['pay_after_test'] = (int)$this->getOtherParameters('pay_after_test');
        $row['shipment']['instruction_returns'] = $this->getOtherParameters('instruction_returns') ? 'shipping_returns' : ($this->getOtherParameters('returns') ? 'returns' : '');
        /*
         * delivery_day – Дата за доставка на пратката - възможните стойности са:
         * - work_day – първия работен ден, half_day – първия работен ден или ден с дежурства;
         * или някоя датите върнати от запитване „информация кои са дните за разнос по дадена дата”. По
         * подразбиране се взема първата възможна дата за доставка.
         */
        $row['shipment']['delivery_day'] = '';

        $row['payment']['side'] = $this->getOtherParameters('side');
        $row['payment']['method'] = 'CASH';//$this->getOtherParameters('payment_method');
        $row['payment']['side'] = $this->getPayer();
        $row['payment']['key_word'] = $row['payment']['method'] == 'CREDIT' ? $this->getOtherParameters('key_word') : '';

        $row['services']['e'] = '';
        $row['services']['dc'] = $this->getOtherParameters('dc') ? 'On' : ''; //обратна разписка;
        $row['services']['dc_cp'] = $this->getOtherParameters('dc_cp') ? 'On' : ''; // стокова разписка;

        if($oc = $this->getDeclaredAmount()) {
            $row['services']['oc'] = $this->getDeclaredAmount();
            $row['services']['oc_currency'] = $this->getDeclaredCurrency();
        } else {
            $row['services']['oc'] = '';
            $row['services']['oc_currency'] = '';
        }

        if($cd = $this->getCashOnDeliveryAmount()) {
            $row['services']['cd'] = array('type' => 'GET', 'value' => $cd);
            $row['services']['cd_currency'] = $this->getCashOnDeliveryCurrency();
            $row['services']['cd_agreement_num'] = $this->getOtherParameters('cd_agreement_num');
        } else {
            $row['services']['cd'] = array('type' => '', 'value' => '');
            $row['services']['cd_currency'] = '';
            $row['services']['cd_agreement_num'] = '';
        }
        $row['services']['pack1'] = '';
        $row['services']['pack2'] = '';
        $row['services']['pack3'] = '';
        $row['services']['pack4'] = '';
        $row['services']['pack5'] = '';
        $row['services']['pack6'] = '';
        $row['services']['pack7'] = '';
        $row['services']['pack8'] = '';
        $row['services']['ref'] = '';

        $row['shipment']['tariff_sub_code'] = $from . '_' . $to;
        $tariff_code = 0;
        if ($row['shipment']['tariff_sub_code'] == 'OFFICE_OFFICE') {
            $tariff_code = 2;
        } elseif ($row['shipment']['tariff_sub_code'] == 'DOOR_OFFICE') {
            $tariff_code = 3;
        }
        $row['shipment']['tariff_code'] = $tariff_code;

        $row['services']['e1'] = $this->getOtherParameters('express_city_courier_e') == 'e1' ? 'On' : '';
        $row['services']['e2'] = $this->getOtherParameters('express_city_courier_e') == 'e2' ? 'On' : '';
        $row['services']['e3'] = $this->getOtherParameters('express_city_courier_e') == 'e3' ? 'On' : '';

        $priority_time_type = $this->getOtherParameters('priority_time_type');
        $priority_time_value = $this->getOtherParameters('priority_time_value');

//        $priority_time_type = 'IN';
//        $priority_time_value = '18:00';

        $row['services']['p'] = array('type' => $priority_time_type, 'value' => $priority_time_value);

        $data['loadings']['row'] = $row;

        return $data;
    }

    public function sendData($data) {
        $tracking = $this->getClient()->calculate($data);
        return $this->createResponse($tracking ? $tracking : $this->getClient()->getError());
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingServicesResponse($this, $data);
    }

}