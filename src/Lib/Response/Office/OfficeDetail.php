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

class OfficeDetail implements Arrayable, Jsonable
{

    use Formater;

    public $courier;

    public $post;

    public $cargo;

    public $cargo_express;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->courier)) {
            $this->courier = (string)$element->courier;
        }
        if(!empty($element->post)) {
            $this->post = (string)$element->post;
        }
        if(!empty($element->cargo)) {
            $this->cargo = (string)$element->cargo;
        }
        if(!empty($element->cargo_express)) {
            $this->cargo_express = (string)$element->cargo_express;
        }
    }

    public function getCourier() {
        return $this->courier;
    }

    public function getPost() {
        return $this->post;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getCargoExpress() {
        return $this->cargo_express;
    }

}