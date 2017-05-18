<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class ClientAddress implements Arrayable, Jsonable
{

    use Formater;

    public $city_post_code;

    public $city;

    public $quarter;

    public $street;

    public $street_num;

    public $other;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->city_post_code)) {
            $this->city_post_code = (string)$element->city_post_code;
        }
        if(!empty($element->city)) {
            $this->city = (string)$element->city;
        }
        if(!empty($element->quarter)) {
            $this->quarter = (string)$element->quarter;
        }
        if(!empty($element->street)) {
            $this->street = (string)$element->street;
        }
        if(!empty($element->street_num)) {
            $this->street_num = (string)$element->street_num;
        }
        if(!empty($element->other)) {
            $this->other = (string)$element->other;
        }
    }

    public function getCityPostCode() {
        return $this->city_post_code;
    }

    public function getCity() {
        return $this->city;
    }

    public function getQuarter() {
        return $this->quarter;
    }

    public function getStreet() {
        return $this->street;
    }

    public function getStreetNumber() {
        return $this->street_num;
    }

    public function getOther() {
        return $this->other;
    }

}