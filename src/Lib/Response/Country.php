<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class Country implements Arrayable, Jsonable
{

    use Formater;

    public $country_name;

    public $country_name_en;

    public $id_zone;

    public $zone_name;

    public $zone_name_en;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->country_name)) {
            $this->country_name = (string)$element->country_name;
        }
        if(!empty($element->country_name_en)) {
            $this->country_name_en = (string)$element->country_name_en;
        }
        if(!empty($element->id_zone)) {
            $this->id_zone = (string)$element->id_zone;
        }
        if(!empty($element->zone_name)) {
            $this->zone_name = (string)$element->zone_name;
        }
        if(!empty($element->zone_name_en)) {
            $this->zone_name_en = (string)$element->zone_name_en;
        }
    }

    public function getCountryName() {
        return $this->country_name;
    }

    public function getCountryNameEn() {
        return $this->country_name_en;
    }

    public function getIdZone() {
        return $this->id_zone;
    }

    public function getZoneName() {
        return $this->zone_name;
    }

    public function getZoneNameEn() {
        return $this->zone_name_en;
    }

}