<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\Office\OfficeAddress;
use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class PostBox implements Arrayable, Jsonable
{

    use Formater;

    public $id;
    public $city_type;
    public $city_name;
    public $city_name_en;
    public $post_code;
    public $id_city;
    public $num;
    public $location;
    public $address;
    public $address_en;
    public $address_details;


    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if(!empty($element->city_type)) {
            $this->city_type = $this->_translateType((string)$element->city_type);
        }
        if(!empty($element->city_name)) {
            $this->city_name = (string)$element->city_name;
        }
        if(!empty($element->city_name_en)) {
            $this->city_name_en = (string)$element->city_name_en;
        }
        if(!empty($element->post_code)) {
            $this->post_code = (string)$element->post_code;
        }
        if(!empty($element->id_city)) {
            $this->id_city = (string)$element->id_city;
        }
        if(!empty($element->num)) {
            $this->num = (string)$element->num;
        }
        if(!empty($element->location)) {
            $this->location = (string)$element->location;
        }
        if(!empty($element->address)) {
            $this->address = (string)$element->address;
        }
        if(!empty($element->address_en)) {
            $this->address_en = (string)$element->address_en;
        }
        if(!empty($element->address_details)) {
            $this->address_details = new OfficeAddress($element->address_details);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getCityType() {
        return $this->city_type;
    }

    public function getNum() {
        return $this->num;
    }

    public function getLocation() {
        return $this->location;
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

    public function getAddressDetails() {
        return $this->address_details;
    }

    protected function _translateType($type)
    {
        if ($type == 1) {
            return 'village';
        }
        if ($type == 2) {
            return 'city';
        }
        return $type;
    }
}