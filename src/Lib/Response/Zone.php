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

class Zone implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $name;

    public $name_en;

    public $national;

    public $is_ee;

    public $updated_time;

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
        if(!empty($element->national)) {
            $this->national = (string)$element->national;
        }
        if(!empty($element->is_ee)) {
            $this->is_ee = (string)$element->is_ee;
        }
        if(!empty($element->updated_time)) {
            $this->updated_time = (string)$element->updated_time;
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

    public function getNational() {
        return $this->national;
    }

    public function getIsEe() {
        return $this->is_ee;
    }

    public function getUpdatedTime() {
        return $this->updated_time;
    }

}