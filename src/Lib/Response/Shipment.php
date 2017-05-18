<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 28.3.2017 г.
 * Time: 15:19 ч.
 */

namespace Omniship\Econt\Lib\Response;

use SimpleXMLElement;
use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;

class Shipment implements Arrayable, Jsonable
{
    use Formater;

    public $loading_num;
    public $loading_id;
    public $is_imported;
    public $storage;
    public $short_delivery_status;
    public $expected_delivery_day;
    public $created_time;
    public $sender_take_time;
    public $shipment_type;
    public $shipment_pack_count;
    public $tariff_code;
    public $tariff_sub_code;
    public $shipment_pack_weight;
    public $shipment_pack_dimensions_l;
    public $shipment_pack_dimensions_w;
    public $shipment_pack_dimensions_h;
    public $shipment_description;
    public $services;
    public $discount;
    public $sender_name;
    public $sender_face;
    public $sender_city_name;
    public $sender_city_code;
    public $sender_quarter;
    public $sender_street;
    public $sender_street_num;
    public $sender_address_other;
    public $sender_phone;
    public $sender_email;
    public $sender_office;
    public $sender_office_code;
    public $receiver_name;
    public $receiver_face;
    public $receiver_city_name;
    public $receiver_city_code;
    public $receiver_quarter;
    public $receiver_street;
    public $receiver_street_num;
    public $receiver_address_other;
    public $receiver_phone;
    public $receiver_email;
    public $receiver_office;
    public $receiver_office_code;
    public $receiver_person;
    public $receiver_courier;
    public $receiver_courier_phone;
    public $receiver_time;
    public $CD_get_sum;
    public $CD_get_time;
    public $CD_send_sum;
    public $CD_send_time;
    public $total_sum;
    public $currency;
    public $sender_ammount_due;
    public $receiver_ammount_due;
    public $other_ammount_due;
    public $delivery_attempt_count;
    public $prev_parcel_num;
    public $return_reason;
    public $tracking = [];
    public $blank_no;
    public $blank_yes;
    public $error;
    public $errorCode;

    public function __construct(SimpleXMLElement $element)
    {

        if(!empty($element->loading_num)) {
            $this->loading_num = (string)$element->loading_num;
        }
        if(!empty($element->loading_id)) {
            $this->loading_id = (string)$element->loading_id;
        }
        if(!empty($element->is_imported)) {
            $this->is_imported = (string)$element->is_imported;
        }
        if(!empty($element->storage)) {
            $this->storage = (string)$element->storage;
        }
        if(!empty($element->short_delivery_status)) {
            $this->short_delivery_status = (string)$element->short_delivery_status;
        }
        if(!empty($element->expected_delivery_day)) {
            $this->expected_delivery_day = (string)$element->expected_delivery_day;
        }
        if(!empty($element->created_time)) {
            $this->created_time = (string)$element->created_time;
        }
        if(!empty($element->sender_take_time)) {
            $this->sender_take_time = (string)$element->sender_take_time;
        }
        if(!empty($element->shipment_type)) {
            $this->shipment_type = (string)$element->shipment_type;
        }
        if(!empty($element->shipment_pack_count)) {
            $this->shipment_pack_count = (string)$element->shipment_pack_count;
        }
        if(!empty($element->tariff_code)) {
            $this->tariff_code = (string)$element->tariff_code;
        }
        if(!empty($element->tariff_sub_code)) {
            $this->tariff_sub_code = (string)$element->tariff_sub_code;
        }
        if(!empty($element->shipment_pack_weight)) {
            $this->shipment_pack_weight = (string)$element->shipment_pack_weight;
        }
        if(!empty($element->shipment_pack_dimensions_l)) {
            $this->shipment_pack_dimensions_l = (string)$element->shipment_pack_dimensions_l;
        }
        if(!empty($element->shipment_pack_dimensions_w)) {
            $this->shipment_pack_dimensions_w = (string)$element->shipment_pack_dimensions_w;
        }
        if(!empty($element->shipment_pack_dimensions_h)) {
            $this->shipment_pack_dimensions_h = (string)$element->shipment_pack_dimensions_h;
        }
        if(!empty($element->shipment_description)) {
            $this->shipment_description = (string)$element->shipment_description;
        }
        if(!empty($element->services)) {
            $this->services = (string)$element->services;
        }
        if(!empty($element->discount)) {
            $this->discount = (string)$element->discount;
        }
        if(!empty($element->sender_name)) {
            $this->sender_name = (string)$element->sender_name;
        }
        if(!empty($element->sender_face)) {
            $this->sender_face = (string)$element->sender_face;
        }
        if(!empty($element->sender_city_name)) {
            $this->sender_city_name = (string)$element->sender_city_name;
        }
        if(!empty($element->sender_city_code)) {
            $this->sender_city_code = (string)$element->sender_city_code;
        }
        if(!empty($element->sender_quarter)) {
            $this->sender_quarter = (string)$element->sender_quarter;
        }
        if(!empty($element->sender_street)) {
            $this->sender_street = (string)$element->sender_street;
        }
        if(!empty($element->sender_street_num)) {
            $this->sender_street_num = (string)$element->sender_street_num;
        }
        if(!empty($element->sender_address_other)) {
            $this->sender_address_other = (string)$element->sender_address_other;
        }
        if(!empty($element->sender_phone)) {
            $this->sender_phone = (string)$element->sender_phone;
        }
        if(!empty($element->sender_email)) {
            $this->sender_email = (string)$element->sender_email;
        }
        if(!empty($element->sender_office)) {
            $this->sender_office = (string)$element->sender_office;
        }
        if(!empty($element->sender_office_code)) {
            $this->sender_office_code = (string)$element->sender_office_code;
        }
        if(!empty($element->receiver_name)) {
            $this->receiver_name = (string)$element->receiver_name;
        }
        if(!empty($element->receiver_face)) {
            $this->receiver_face = (string)$element->receiver_face;
        }
        if(!empty($element->receiver_city_name)) {
            $this->receiver_city_name = (string)$element->receiver_city_name;
        }
        if(!empty($element->receiver_city_code)) {
            $this->receiver_city_code = (string)$element->receiver_city_code;
        }
        if(!empty($element->receiver_quarter)) {
            $this->receiver_quarter = (string)$element->receiver_quarter;
        }
        if(!empty($element->receiver_street)) {
            $this->receiver_street = (string)$element->receiver_street;
        }
        if(!empty($element->receiver_street_num)) {
            $this->receiver_street_num = (string)$element->receiver_street_num;
        }
        if(!empty($element->receiver_address_other)) {
            $this->receiver_address_other = (string)$element->receiver_address_other;
        }
        if(!empty($element->receiver_phone)) {
            $this->receiver_phone = (string)$element->receiver_phone;
        }
        if(!empty($element->receiver_email)) {
            $this->receiver_email = (string)$element->receiver_email;
        }
        if(!empty($element->receiver_office)) {
            $this->receiver_office = (string)$element->receiver_office;
        }
        if(!empty($element->receiver_office_code)) {
            $this->receiver_office_code = (string)$element->receiver_office_code;
        }
        if(!empty($element->receiver_person)) {
            $this->receiver_person = (string)$element->receiver_person;
        }
        if(!empty($element->receiver_courier)) {
            $this->receiver_courier = (string)$element->receiver_courier;
        }
        if(!empty($element->receiver_courier_phone)) {
            $this->receiver_courier_phone = (string)$element->receiver_courier_phone;
        }
        if(!empty($element->receiver_time)) {
            $this->receiver_time = (string)$element->receiver_time;
        }
        if(!empty($element->CD_get_sum)) {
            $this->CD_get_sum = (string)$element->CD_get_sum;
        }
        if(!empty($element->CD_get_time)) {
            $this->CD_get_time = (string)$element->CD_get_time;
        }
        if(!empty($element->CD_send_sum)) {
            $this->CD_send_sum = (string)$element->CD_send_sum;
        }
        if(!empty($element->CD_send_time)) {
            $this->CD_send_time = (string)$element->CD_send_time;
        }
        if(!empty($element->total_sum)) {
            $this->total_sum = (string)$element->total_sum;
        }
        if(!empty($element->currency)) {
            $this->currency = (string)$element->currency;
        }
        if(!empty($element->sender_ammount_due)) {
            $this->sender_ammount_due = (string)$element->sender_ammount_due;
        }
        if(!empty($element->receiver_ammount_due)) {
            $this->receiver_ammount_due = (string)$element->receiver_ammount_due;
        }
        if(!empty($element->other_ammount_due)) {
            $this->other_ammount_due = (string)$element->other_ammount_due;
        }
        if(!empty($element->delivery_attempt_count)) {
            $this->delivery_attempt_count = (string)$element->delivery_attempt_count;
        }
        if(!empty($element->prev_parcel_num)) {
            $this->prev_parcel_num = (string)$element->prev_parcel_num;
        }
        if(!empty($element->return_reason)) {
            $this->return_reason = (string)$element->return_reason;
        }
        if(!empty($element->tracking) && !empty($element->tracking->row)) {
            foreach($element->tracking->row AS $row) {
                $this->tracking[] = (array)$row;
            }
        }
        if(!empty($element->blank_no)) {
            $this->blank_no = (string)$element->blank_no;
        }
        if(!empty($element->blank_yes)) {
            $this->blank_yes = (string)$element->blank_yes;
        }
        if(!empty($element->error)) {
            $this->error = (string)$element->error;
        }
        if(!empty($element->errorCode)) {
            $this->errorCode = (string)$element->errorCode;
        }

    }


    public function getLoadingNum() {
        return $this->loading_num;
    }

    public function getLoadingId() {
        return $this->loading_id;
    }

    public function getIsImported() {
        return $this->is_imported;
    }

    public function getStorage() {
        return $this->storage;
    }

    public function getShortDeliveryStatus() {
        return $this->short_delivery_status;
    }

    public function getExpectedDeliveryDay() {
        return $this->expected_delivery_day;
    }

    public function getCreatedTime() {
        return $this->created_time;
    }

    public function getSenderTakeTime() {
        return $this->sender_take_time;
    }

    public function getShipmentType() {
        return $this->shipment_type;
    }

    public function getShipmentPackCount() {
        return $this->shipment_pack_count;
    }

    public function getTariffCode() {
        return $this->tariff_code;
    }

    public function getTariffSubCode() {
        return $this->tariff_sub_code;
    }

    public function getShipmentPackWeight() {
        return $this->shipment_pack_weight;
    }

    public function getShipmentPackDimensionsL() {
        return $this->shipment_pack_dimensions_l;
    }

    public function getShipmentPackDimensionsW() {
        return $this->shipment_pack_dimensions_w;
    }

    public function getShipmentPackDimensionsH() {
        return $this->shipment_pack_dimensions_h;
    }

    public function getShipmentDescription() {
        return $this->shipment_description;
    }

    public function getServices() {
        return $this->services;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getSenderName() {
        return $this->sender_name;
    }

    public function getSenderFace() {
        return $this->sender_face;
    }

    public function getSenderCityName() {
        return $this->sender_city_name;
    }

    public function getSenderCityCode() {
        return $this->sender_city_code;
    }

    public function getSenderQuarter() {
        return $this->sender_quarter;
    }

    public function getSenderStreet() {
        return $this->sender_street;
    }

    public function getSenderStreetNum() {
        return $this->sender_street_num;
    }

    public function getSenderAddressOther() {
        return $this->sender_address_other;
    }

    public function getSenderPhone() {
        return $this->sender_phone;
    }

    public function getSenderEmail() {
        return $this->sender_email;
    }

    public function getSenderOffice() {
        return $this->sender_office;
    }

    public function getSenderOfficeCode() {
        return $this->sender_office_code;
    }

    public function getReceiverName() {
        return $this->receiver_name;
    }

    public function getReceiverFace() {
        return $this->receiver_face;
    }

    public function getReceiverCityName() {
        return $this->receiver_city_name;
    }

    public function getReceiverCityCode() {
        return $this->receiver_city_code;
    }

    public function getReceiverQuarter() {
        return $this->receiver_quarter;
    }

    public function getReceiverStreet() {
        return $this->receiver_street;
    }

    public function getReceiverStreetNum() {
        return $this->receiver_street_num;
    }

    public function getReceiverAddressOther() {
        return $this->receiver_address_other;
    }

    public function getReceiverPhone() {
        return $this->receiver_phone;
    }

    public function getReceiverEmail() {
        return $this->receiver_email;
    }

    public function getReceiverOffice() {
        return $this->receiver_office;
    }

    public function getReceiverOfficeCode() {
        return $this->receiver_office_code;
    }

    public function getReceiverPerson() {
        return $this->receiver_person;
    }

    public function getReceiverCourier() {
        return $this->receiver_courier;
    }

    public function getReceiverCourierPhone() {
        return $this->receiver_courier_phone;
    }

    public function getReceiverTime() {
        return $this->receiver_time;
    }

    public function getCDGetSum() {
        return $this->CD_get_sum;
    }

    public function getCDGetTime() {
        return $this->CD_get_time;
    }

    public function getCDSendSum() {
        return $this->CD_send_sum;
    }

    public function getCDSendTime() {
        return $this->CD_send_time;
    }

    public function getTotalSum() {
        return $this->total_sum;
    }

    public function getCurrency() {
        return $this->currency;
    }

    public function getSenderAmmountDue() {
        return $this->sender_ammount_due;
    }

    public function getReceiverAmmountDue() {
        return $this->receiver_ammount_due;
    }

    public function getOtherAmmountDue() {
        return $this->other_ammount_due;
    }

    public function getDeliveryAttemptCount() {
        return $this->delivery_attempt_count;
    }

    public function getPrevParcelNum() {
        return $this->prev_parcel_num;
    }

    public function getReturnReason() {
        return $this->return_reason;
    }

    public function getTracking() {
        return $this->tracking;
    }

    public function getBlankNo() {
        return $this->blank_no;
    }

    public function getBlankYes() {
        return $this->blank_yes;
    }

    public function getError() {
        return $this->error;
    }

    public function getErrorCode() {
        return $this->errorCode;
    }



}