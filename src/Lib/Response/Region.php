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

class Region implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $name;

    public $code;

    public $id_city;

    public $updated_time;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if(!empty($element->name)) {
            $this->name = (string)$element->name;
        }
        if(!empty($element->code)) {
            $this->code = (string)$element->code;
        }
        if(!empty($element->id_city)) {
            $this->id_city = (string)$element->id_city;
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

    public function getCode() {
        return $this->code;
    }

    public function getIdCity() {
        return $this->id_city;
    }

    public function getUpdatedTime() {
        return $this->updated_time;
    }

}