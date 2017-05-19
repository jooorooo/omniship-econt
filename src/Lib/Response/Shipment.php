<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 28.3.2017 г.
 * Time: 15:19 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\Shipment\TrackBag;
use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class Shipment implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'loading_num' => ['type' => 'float'], 'loading_id' => ['type' => 'string'],
        'is_imported' => ['type' => 'bool'], 'storage',
        'short_delivery_status', 'expected_delivery_day',
        'created_time', 'sender_take_time', 'shipment_type',
        'shipment_pack_count' => ['type' => 'int'], 'tariff_code' => ['type' => 'int'],
        'tariff_sub_code', 'shipment_pack_weight' => ['type' => 'float'],
        'shipment_pack_dimensions_l' => ['type' => 'float'],
        'shipment_pack_dimensions_w' => ['type' => 'float'],
        'shipment_pack_dimensions_h' => ['type' => 'float'],
        'shipment_description', 'services', 'discount',
        'sender_name', 'sender_face', 'sender_city_name',
        'sender_city_code', 'sender_quarter', 'sender_street',
        'sender_street_num', 'sender_address_other',
        'sender_phone', 'sender_email', 'sender_office',
        'sender_office_code', 'receiver_name', 'receiver_face',
        'receiver_city_name', 'receiver_city_code', 'receiver_quarter',
        'receiver_street', 'receiver_street_num', 'receiver_address_other',
        'receiver_phone', 'receiver_email', 'receiver_office',
        'receiver_office_code', 'receiver_person', 'receiver_courier',
        'receiver_courier_phone', 'receiver_time', 'CD_sum' => ['type' => 'float'],
        'CD_currency', 'CD_get_sum' => ['type' => 'float'], 'CD_get_time',
        'CD_send_sum' => ['type' => 'float'], 'CD_send_time', 'total_sum' => ['type' => 'float'], 'currency',
        'sender_ammount_due' => ['type' => 'float'], 'receiver_ammount_due' => ['type' => 'float'],
        'other_ammount_due' => ['type' => 'float'], 'delivery_attempt_count' => ['type' => 'int'],
        'prev_parcel_num', 'return_reason', 'tracking' => ['sub_object' => TrackBag::class],
        'blank_no', 'blank_yes', 'error', 'errorCode'
    );

    /**
     * @param float $loading_num
     * @return $this
     */
    public function setLoadingNum($loading_num)
    {
        return $this->setParameter('loading_num', $loading_num);
    }

    /**
     * @return float
     */
    public function getLoadingNum()
    {
        return $this->getParameter('loading_num');
    }

    /**
     * @param string $loading_id
     * @return $this
     */
    public function setLoadingId($loading_id)
    {
        return $this->setParameter('loading_id', $loading_id);
    }

    /**
     * @return string
     */
    public function getLoadingId()
    {
        return $this->getParameter('loading_id');
    }

    /**
     * @param bool $is_imported
     * @return $this
     */
    public function setIsImported($is_imported)
    {
        return $this->setParameter('is_imported', $is_imported);
    }

    /**
     * @return bool
     */
    public function getIsImported()
    {
        return $this->getParameter('is_imported');
    }

    /**
     * @param string $storage
     * @return $this
     */
    public function setStorage($storage)
    {
        return $this->setParameter('storage', $storage);
    }

    /**
     * @return string
     */
    public function getStorage()
    {
        return $this->getParameter('storage');
    }

    /**
     * @param string $short_delivery_status
     * @return $this
     */
    public function setShortDeliveryStatus($short_delivery_status)
    {
        return $this->setParameter('short_delivery_status', $short_delivery_status);
    }

    /**
     * @return string
     */
    public function getShortDeliveryStatus()
    {
        return $this->getParameter('short_delivery_status');
    }

    /**
     * @param string $expected_delivery_day
     * @return $this
     */
    public function setExpectedDeliveryDay($expected_delivery_day)
    {
        return $this->setParameter('expected_delivery_day', $expected_delivery_day);
    }

    /**
     * @return string
     */
    public function getExpectedDeliveryDay()
    {
        return $this->getParameter('expected_delivery_day');
    }

    /**
     * @param string $created_time
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        return $this->setParameter('created_time', $created_time);
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->getParameter('created_time');
    }

    /**
     * @param string $sender_take_time
     * @return $this
     */
    public function setSenderTakeTime($sender_take_time)
    {
        return $this->setParameter('sender_take_time', $sender_take_time);
    }

    /**
     * @return string
     */
    public function getSenderTakeTime()
    {
        return $this->getParameter('sender_take_time');
    }

    /**
     * @param string $shipment_type
     * @return $this
     */
    public function setShipmentType($shipment_type)
    {
        return $this->setParameter('shipment_type', $shipment_type);
    }

    /**
     * @return string
     */
    public function getShipmentType()
    {
        return $this->getParameter('shipment_type');
    }

    /**
     * @param int $shipment_pack_count
     * @return $this
     */
    public function setShipmentPackCount($shipment_pack_count)
    {
        return $this->setParameter('shipment_pack_count', $shipment_pack_count);
    }

    /**
     * @return int
     */
    public function getShipmentPackCount()
    {
        return $this->getParameter('shipment_pack_count');
    }

    /**
     * @param int $tariff_code
     * @return $this
     */
    public function setTariffCode($tariff_code)
    {
        return $this->setParameter('tariff_code', $tariff_code);
    }

    /**
     * @return int
     */
    public function getTariffCode()
    {
        return $this->getParameter('tariff_code');
    }

    /**
     * @param string $tariff_sub_code
     * @return $this
     */
    public function setTariffSubCode($tariff_sub_code)
    {
        return $this->setParameter('tariff_sub_code', $tariff_sub_code);
    }

    /**
     * @return string
     */
    public function getTariffSubCode()
    {
        return $this->getParameter('tariff_sub_code');
    }

    /**
     * @param float $shipment_pack_weight
     * @return $this
     */
    public function setShipmentPackWeight($shipment_pack_weight)
    {
        return $this->setParameter('shipment_pack_weight', $shipment_pack_weight);
    }

    /**
     * @return float
     */
    public function getShipmentPackWeight()
    {
        return $this->getParameter('shipment_pack_weight');
    }

    /**
     * @param float $shipment_pack_dimensions_l
     * @return $this
     */
    public function setShipmentPackDimensionsL($shipment_pack_dimensions_l)
    {
        return $this->setParameter('shipment_pack_dimensions_l', $shipment_pack_dimensions_l);
    }

    /**
     * @return float
     */
    public function getShipmentPackDimensionsL()
    {
        return $this->getParameter('shipment_pack_dimensions_l');
    }

    /**
     * @param float $shipment_pack_dimensions_w
     * @return $this
     */
    public function setShipmentPackDimensionsW($shipment_pack_dimensions_w)
    {
        return $this->setParameter('shipment_pack_dimensions_w', $shipment_pack_dimensions_w);
    }

    /**
     * @return float
     */
    public function getShipmentPackDimensionsW()
    {
        return $this->getParameter('shipment_pack_dimensions_w');
    }

    /**
     * @param float $shipment_pack_dimensions_h
     * @return $this
     */
    public function setShipmentPackDimensionsH($shipment_pack_dimensions_h)
    {
        return $this->setParameter('shipment_pack_dimensions_h', $shipment_pack_dimensions_h);
    }

    /**
     * @return float
     */
    public function getShipmentPackDimensionsH()
    {
        return $this->getParameter('shipment_pack_dimensions_h');
    }

    /**
     * @param string $shipment_description
     * @return $this
     */
    public function setShipmentDescription($shipment_description)
    {
        return $this->setParameter('shipment_description', $shipment_description);
    }

    /**
     * @return string
     */
    public function getShipmentDescription()
    {
        return $this->getParameter('shipment_description');
    }

    /**
     * @param string $services
     * @return $this
     */
    public function setServices($services)
    {
        return $this->setParameter('services', $services);
    }

    /**
     * @return string
     */
    public function getServices()
    {
        return $this->getParameter('services');
    }

    /**
     * @param string $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        return $this->setParameter('discount', $discount);
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
        return $this->getParameter('discount');
    }

    /**
     * @param string $sender_name
     * @return $this
     */
    public function setSenderName($sender_name)
    {
        return $this->setParameter('sender_name', $sender_name);
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->getParameter('sender_name');
    }

    /**
     * @param string $sender_face
     * @return $this
     */
    public function setSenderFace($sender_face)
    {
        return $this->setParameter('sender_face', $sender_face);
    }

    /**
     * @return string
     */
    public function getSenderFace()
    {
        return $this->getParameter('sender_face');
    }

    /**
     * @param string $sender_city_name
     * @return $this
     */
    public function setSenderCityName($sender_city_name)
    {
        return $this->setParameter('sender_city_name', $sender_city_name);
    }

    /**
     * @return string
     */
    public function getSenderCityName()
    {
        return $this->getParameter('sender_city_name');
    }

    /**
     * @param string $sender_city_code
     * @return $this
     */
    public function setSenderCityCode($sender_city_code)
    {
        return $this->setParameter('sender_city_code', $sender_city_code);
    }

    /**
     * @return string
     */
    public function getSenderCityCode()
    {
        return $this->getParameter('sender_city_code');
    }

    /**
     * @param string $sender_quarter
     * @return $this
     */
    public function setSenderQuarter($sender_quarter)
    {
        return $this->setParameter('sender_quarter', $sender_quarter);
    }

    /**
     * @return string
     */
    public function getSenderQuarter()
    {
        return $this->getParameter('sender_quarter');
    }

    /**
     * @param string $sender_street
     * @return $this
     */
    public function setSenderStreet($sender_street)
    {
        return $this->setParameter('sender_street', $sender_street);
    }

    /**
     * @return string
     */
    public function getSenderStreet()
    {
        return $this->getParameter('sender_street');
    }

    /**
     * @param string $sender_street_num
     * @return $this
     */
    public function setSenderStreetNum($sender_street_num)
    {
        return $this->setParameter('sender_street_num', $sender_street_num);
    }

    /**
     * @return string
     */
    public function getSenderStreetNum()
    {
        return $this->getParameter('sender_street_num');
    }

    /**
     * @param string $sender_address_other
     * @return $this
     */
    public function setSenderAddressOther($sender_address_other)
    {
        return $this->setParameter('sender_address_other', $sender_address_other);
    }

    /**
     * @return string
     */
    public function getSenderAddressOther()
    {
        return $this->getParameter('sender_address_other');
    }

    /**
     * @param string $sender_phone
     * @return $this
     */
    public function setSenderPhone($sender_phone)
    {
        return $this->setParameter('sender_phone', $sender_phone);
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
        return $this->getParameter('sender_phone');
    }

    /**
     * @param string $sender_email
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        return $this->setParameter('sender_email', $sender_email);
    }

    /**
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->getParameter('sender_email');
    }

    /**
     * @param string $sender_office
     * @return $this
     */
    public function setSenderOffice($sender_office)
    {
        return $this->setParameter('sender_office', $sender_office);
    }

    /**
     * @return string
     */
    public function getSenderOffice()
    {
        return $this->getParameter('sender_office');
    }

    /**
     * @param string $sender_office_code
     * @return $this
     */
    public function setSenderOfficeCode($sender_office_code)
    {
        return $this->setParameter('sender_office_code', $sender_office_code);
    }

    /**
     * @return string
     */
    public function getSenderOfficeCode()
    {
        return $this->getParameter('sender_office_code');
    }

    /**
     * @param string $receiver_name
     * @return $this
     */
    public function setReceiverName($receiver_name)
    {
        return $this->setParameter('receiver_name', $receiver_name);
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        return $this->getParameter('receiver_name');
    }

    /**
     * @param string $receiver_face
     * @return $this
     */
    public function setReceiverFace($receiver_face)
    {
        return $this->setParameter('receiver_face', $receiver_face);
    }

    /**
     * @return string
     */
    public function getReceiverFace()
    {
        return $this->getParameter('receiver_face');
    }

    /**
     * @param string $receiver_city_name
     * @return $this
     */
    public function setReceiverCityName($receiver_city_name)
    {
        return $this->setParameter('receiver_city_name', $receiver_city_name);
    }

    /**
     * @return string
     */
    public function getReceiverCityName()
    {
        return $this->getParameter('receiver_city_name');
    }

    /**
     * @param string $receiver_city_code
     * @return $this
     */
    public function setReceiverCityCode($receiver_city_code)
    {
        return $this->setParameter('receiver_city_code', $receiver_city_code);
    }

    /**
     * @return string
     */
    public function getReceiverCityCode()
    {
        return $this->getParameter('receiver_city_code');
    }

    /**
     * @param string $receiver_quarter
     * @return $this
     */
    public function setReceiverQuarter($receiver_quarter)
    {
        return $this->setParameter('receiver_quarter', $receiver_quarter);
    }

    /**
     * @return string
     */
    public function getReceiverQuarter()
    {
        return $this->getParameter('receiver_quarter');
    }

    /**
     * @param string $receiver_street
     * @return $this
     */
    public function setReceiverStreet($receiver_street)
    {
        return $this->setParameter('receiver_street', $receiver_street);
    }

    /**
     * @return string
     */
    public function getReceiverStreet()
    {
        return $this->getParameter('receiver_street');
    }

    /**
     * @param string $receiver_street_num
     * @return $this
     */
    public function setReceiverStreetNum($receiver_street_num)
    {
        return $this->setParameter('receiver_street_num', $receiver_street_num);
    }

    /**
     * @return string
     */
    public function getReceiverStreetNum()
    {
        return $this->getParameter('receiver_street_num');
    }

    /**
     * @param string $receiver_address_other
     * @return $this
     */
    public function setReceiverAddressOther($receiver_address_other)
    {
        return $this->setParameter('receiver_address_other', $receiver_address_other);
    }

    /**
     * @return string
     */
    public function getReceiverAddressOther()
    {
        return $this->getParameter('receiver_address_other');
    }

    /**
     * @param string $receiver_phone
     * @return $this
     */
    public function setReceiverPhone($receiver_phone)
    {
        return $this->setParameter('receiver_phone', $receiver_phone);
    }

    /**
     * @return string
     */
    public function getReceiverPhone()
    {
        return $this->getParameter('receiver_phone');
    }

    /**
     * @param string $receiver_email
     * @return $this
     */
    public function setReceiverEmail($receiver_email)
    {
        return $this->setParameter('receiver_email', $receiver_email);
    }

    /**
     * @return string
     */
    public function getReceiverEmail()
    {
        return $this->getParameter('receiver_email');
    }

    /**
     * @param string $receiver_office
     * @return $this
     */
    public function setReceiverOffice($receiver_office)
    {
        return $this->setParameter('receiver_office', $receiver_office);
    }

    /**
     * @return string
     */
    public function getReceiverOffice()
    {
        return $this->getParameter('receiver_office');
    }

    /**
     * @param string $receiver_office_code
     * @return $this
     */
    public function setReceiverOfficeCode($receiver_office_code)
    {
        return $this->setParameter('receiver_office_code', $receiver_office_code);
    }

    /**
     * @return string
     */
    public function getReceiverOfficeCode()
    {
        return $this->getParameter('receiver_office_code');
    }

    /**
     * @param string $receiver_person
     * @return $this
     */
    public function setReceiverPerson($receiver_person)
    {
        return $this->setParameter('receiver_person', $receiver_person);
    }

    /**
     * @return string
     */
    public function getReceiverPerson()
    {
        return $this->getParameter('receiver_person');
    }

    /**
     * @param string $receiver_courier
     * @return $this
     */
    public function setReceiverCourier($receiver_courier)
    {
        return $this->setParameter('receiver_courier', $receiver_courier);
    }

    /**
     * @return string
     */
    public function getReceiverCourier()
    {
        return $this->getParameter('receiver_courier');
    }

    /**
     * @param string $receiver_courier_phone
     * @return $this
     */
    public function setReceiverCourierPhone($receiver_courier_phone)
    {
        return $this->setParameter('receiver_courier_phone', $receiver_courier_phone);
    }

    /**
     * @return string
     */
    public function getReceiverCourierPhone()
    {
        return $this->getParameter('receiver_courier_phone');
    }

    /**
     * @param string $receiver_time
     * @return $this
     */
    public function setReceiverTime($receiver_time)
    {
        return $this->setParameter('receiver_time', $receiver_time);
    }

    /**
     * @return string
     */
    public function getReceiverTime()
    {
        return $this->getParameter('receiver_time');
    }

    /**
     * @param float $CD_sum
     * @return $this
     */
    public function setCdSum($CD_sum)
    {
        return $this->setParameter('CD_sum', $CD_sum);
    }

    /**
     * @return float
     */
    public function getCdSum()
    {
        return $this->getParameter('CD_sum');
    }

    /**
     * @param string $CD_currency
     * @return $this
     */
    public function setCdCurrency($CD_currency)
    {
        return $this->setParameter('CD_currency', $CD_currency);
    }

    /**
     * @return string
     */
    public function getCdCurrency()
    {
        return $this->getParameter('CD_currency');
    }

    /**
     * @param float $CD_get_sum
     * @return $this
     */
    public function setCdGetSum($CD_get_sum)
    {
        return $this->setParameter('CD_get_sum', $CD_get_sum);
    }

    /**
     * @return float
     */
    public function getCdGetSum()
    {
        return $this->getParameter('CD_get_sum');
    }

    /**
     * @param string $CD_get_time
     * @return $this
     */
    public function setCdGetTime($CD_get_time)
    {
        return $this->setParameter('CD_get_time', $CD_get_time);
    }

    /**
     * @return string
     */
    public function getCdGetTime()
    {
        return $this->getParameter('CD_get_time');
    }

    /**
     * @param float $CD_send_sum
     * @return $this
     */
    public function setCdSendSum($CD_send_sum)
    {
        return $this->setParameter('CD_send_sum', $CD_send_sum);
    }

    /**
     * @return float
     */
    public function getCdSendSum()
    {
        return $this->getParameter('CD_send_sum');
    }

    /**
     * @param string $CD_send_time
     * @return $this
     */
    public function setCdSendTime($CD_send_time)
    {
        return $this->setParameter('CD_send_time', $CD_send_time);
    }

    /**
     * @return string
     */
    public function getCdSendTime()
    {
        return $this->getParameter('CD_send_time');
    }

    /**
     * @param float $total_sum
     * @return $this
     */
    public function setTotalSum($total_sum)
    {
        return $this->setParameter('total_sum', $total_sum);
    }

    /**
     * @return float
     */
    public function getTotalSum()
    {
        return $this->getParameter('total_sum');
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        return $this->setParameter('currency', $currency);
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    /**
     * @param float $sender_ammount_due
     * @return $this
     */
    public function setSenderAmmountDue($sender_ammount_due)
    {
        return $this->setParameter('sender_ammount_due', $sender_ammount_due);
    }

    /**
     * @return float
     */
    public function getSenderAmmountDue()
    {
        return $this->getParameter('sender_ammount_due');
    }

    /**
     * @param float $receiver_ammount_due
     * @return $this
     */
    public function setReceiverAmmountDue($receiver_ammount_due)
    {
        return $this->setParameter('receiver_ammount_due', $receiver_ammount_due);
    }

    /**
     * @return float
     */
    public function getReceiverAmmountDue()
    {
        return $this->getParameter('receiver_ammount_due');
    }

    /**
     * @param float $other_ammount_due
     * @return $this
     */
    public function setOtherAmmountDue($other_ammount_due)
    {
        return $this->setParameter('other_ammount_due', $other_ammount_due);
    }

    /**
     * @return float
     */
    public function getOtherAmmountDue()
    {
        return $this->getParameter('other_ammount_due');
    }

    /**
     * @param int $delivery_attempt_count
     * @return $this
     */
    public function setDeliveryAttemptCount($delivery_attempt_count)
    {
        return $this->setParameter('delivery_attempt_count', $delivery_attempt_count);
    }

    /**
     * @return int
     */
    public function getDeliveryAttemptCount()
    {
        return $this->getParameter('delivery_attempt_count');
    }

    /**
     * @param string $prev_parcel_num
     * @return $this
     */
    public function setPrevParcelNum($prev_parcel_num)
    {
        return $this->setParameter('prev_parcel_num', $prev_parcel_num);
    }

    /**
     * @return string
     */
    public function getPrevParcelNum()
    {
        return $this->getParameter('prev_parcel_num');
    }

    /**
     * @param string $return_reason
     * @return $this
     */
    public function setReturnReason($return_reason)
    {
        return $this->setParameter('return_reason', $return_reason);
    }

    /**
     * @return string
     */
    public function getReturnReason()
    {
        return $this->getParameter('return_reason');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Shipment\TrackBag|array|null $tracking
     * @return $this
     */
    public function setTracking($tracking)
    {
        return $this->setParameter('tracking', $tracking);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Shipment\TrackBag|array|null
     */
    public function getTracking()
    {
        return $this->getParameter('tracking');
    }

    /**
     * @param string $blank_no
     * @return $this
     */
    public function setBlankNo($blank_no)
    {
        return $this->setParameter('blank_no', $blank_no);
    }

    /**
     * @return string
     */
    public function getBlankNo()
    {
        return $this->getParameter('blank_no');
    }

    /**
     * @param string $blank_yes
     * @return $this
     */
    public function setBlankYes($blank_yes)
    {
        return $this->setParameter('blank_yes', $blank_yes);
    }

    /**
     * @return string
     */
    public function getBlankYes()
    {
        return $this->getParameter('blank_yes');
    }

    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        return $this->setParameter('error', $error);
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->getParameter('error');
    }

    /**
     * @param string $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        return $this->setParameter('errorCode', $errorCode);
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->getParameter('errorCode');
    }

}