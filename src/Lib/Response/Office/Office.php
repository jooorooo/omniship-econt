<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response\Office;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class Office implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $name;

    public $name_en;

    public $office_code;

    public $is_machine;

    public $country_code;

    public $id_city;

    public $post_code;

    public $city_name;

    public $city_name_en;

    public $address;

    public $address_en;

    public $latitude;

    public $longitude;

    public $address_details;

    public $office_details;

    public $phone;

    public $email;

    public $work_begin;

    public $work_end;

    public $work_begin_saturday;

    public $work_end_saturday;

    public $time_priority;

    public $updated_time;

    public $hub_code;

    public $hub_name;

    public $hub_name_en;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if(!empty($element->name)) {
            $this->name = (string)$element->name;
        }
        if(!empty($element->name_en)) {
            $this->name_en = (string)$element->name_en;
        }
        if(!empty($element->office_code)) {
            $this->office_code = (string)$element->office_code;
        }
        if(!empty($element->is_machine)) {
            $this->is_machine = (string)$element->is_machine;
        }
        if(!empty($element->country_code)) {
            $this->country_code = (string)$element->country_code;
        }
        if(!empty($element->id_city)) {
            $this->id_city = (string)$element->id_city;
        }
        if(!empty($element->post_code)) {
            $this->post_code = (string)$element->post_code;
        }
        if(!empty($element->city_name)) {
            $this->city_name = (string)$element->city_name;
        }
        if(!empty($element->city_name_en)) {
            $this->city_name_en = (string)$element->city_name_en;
        }
        if(!empty($element->address)) {
            $this->address = (string)$element->address;
        }
        if(!empty($element->address_en)) {
            $this->address_en = (string)$element->address_en;
        }
        if(!empty($element->latitude)) {
            $this->latitude = (string)$element->latitude;
        }
        if(!empty($element->longitude)) {
            $this->longitude = (string)$element->longitude;
        }
        if(!empty($element->address_details)) {
            $this->address_details = new OfficeAddress($element->address_details);
        }
        if(!empty($element->office_details)) {
            $this->office_details = new OfficeDetail($element->office_details);
        }
        if(!empty($element->phone)) {
            $this->phone = (string)$element->phone;
        }
        if(!empty($element->email)) {
            $this->email = (string)$element->email;
        }
        if(!empty($element->work_begin)) {
            $this->work_begin = (string)$element->work_begin;
        }
        if(!empty($element->work_end)) {
            $this->work_end = (string)$element->work_end;
        }
        if(!empty($element->work_begin_saturday)) {
            $this->work_begin_saturday = (string)$element->work_begin_saturday;
        }
        if(!empty($element->work_end_saturday)) {
            $this->work_end_saturday = (string)$element->work_end_saturday;
        }
        if(!empty($element->time_priority)) {
            $this->time_priority = (string)$element->time_priority;
        }
        if(!empty($element->updated_time)) {
            $this->updated_time = (string)$element->updated_time;
        }
        if(!empty($element->hub_code)) {
            $this->hub_code = (string)$element->hub_code;
        }
        if(!empty($element->hub_name)) {
            $this->hub_name = (string)$element->hub_name;
        }
        if(!empty($element->hub_name_en)) {
            $this->hub_name_en = (string)$element->hub_name_en;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getNameEn() {
        return $this->name_en;
    }

    public function getOfficeCode() {
        return $this->office_code;
    }

    public function getIsMachine() {
        return $this->is_machine;
    }

    public function getCountryCode() {
        return $this->country_code;
    }

    public function getIdCity() {
        return $this->id_city;
    }

    public function getPostCode() {
        return $this->post_code;
    }

    public function getCityName() {
        return $this->city_name;
    }

    public function getCityNameEn() {
        return $this->city_name_en;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getAddressEn() {
        return $this->address_en;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getAddressDetails() {
        return $this->address_details;
    }

    public function getOfficeDetails() {
        return $this->office_details;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getWorkBegin() {
        return $this->work_begin;
    }

    public function getWorkEnd() {
        return $this->work_end;
    }

    public function getWorkBeginSaturday() {
        return $this->work_begin_saturday;
    }

    public function getWorkEndSaturday() {
        return $this->work_end_saturday;
    }

    public function getTimePriority() {
        return $this->time_priority;
    }

    public function getUpdatedTime() {
        return $this->updated_time;
    }

    public function getHubCode() {
        return $this->hub_code;
    }

    public function getHubName() {
        return $this->hub_name;
    }

    public function getHubNameEn() {
        return $this->hub_name_en;
    }

}