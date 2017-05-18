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

class OfficeAddress implements Arrayable, Jsonable
{

    use Formater;

    public $id_quarter;

    public $quarter_name;

    public $quarter_name_en;

    public $id_street;

    public $street_name;

    public $street_name_en;

    public $num;

    public $bl;

    public $vh;

    public $et;

    public $ap;

    public $other;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id_quarter)) {
            $this->id_quarter = (string)$element->id_quarter;
        }
        if(!empty($element->quarter_name)) {
            $this->quarter_name = (string)$element->quarter_name;
        }
        if(!empty($element->quarter_name_en)) {
            $this->quarter_name_en = (string)$element->quarter_name_en;
        }
        if(!empty($element->id_street)) {
            $this->id_street = (string)$element->id_street;
        }
        if(!empty($element->street_name)) {
            $this->street_name = (string)$element->street_name;
        }
        if(!empty($element->street_name_en)) {
            $this->street_name_en = (string)$element->street_name_en;
        }
        if(!empty($element->num)) {
            $this->num = (string)$element->num;
        }
        if(!empty($element->bl)) {
            $this->bl = (string)$element->bl;
        }
        if(!empty($element->vh)) {
            $this->vh = (string)$element->vh;
        }
        if(!empty($element->et)) {
            $this->et = (string)$element->et;
        }
        if(!empty($element->ap)) {
            $this->ap = (string)$element->ap;
        }
        if(!empty($element->other)) {
            $this->other = (string)$element->other;
        }
    }

    public function getIdQuarter() {
        return $this->id_quarter;
    }

    public function getQuarterName() {
        return $this->quarter_name;
    }

    public function getQuarterNameEn() {
        return $this->quarter_name_en;
    }

    public function getIdStreet() {
        return $this->id_street;
    }

    public function getStreetName() {
        return $this->street_name;
    }

    public function getStreetNameEn() {
        return $this->street_name_en;
    }

    public function getNum() {
        return $this->num;
    }

    public function getBl() {
        return $this->bl;
    }

    public function getVh() {
        return $this->vh;
    }

    public function getEt() {
        return $this->et;
    }

    public function getAp() {
        return $this->ap;
    }

    public function getOther() {
        return $this->other;
    }

}