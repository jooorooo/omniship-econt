<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 12:42 ч.
 */

namespace Omniship\Econt\Lib\Response\City;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;

class AttachOffice implements Arrayable, Jsonable
{

    use Formater;

    public $office_code;

    public $shipment_type;

    public $delivery_type;

    public $city_id;

    public function __construct(array $element)
    {
        $element = (object)$element;
        if(!empty($element->office_code)) {
            $this->office_code = (string)$element->office_code;
        }
        if(!empty($element->shipment_type)) {
            $this->shipment_type = (string)$element->shipment_type;
        }
        if(!empty($element->delivery_type)) {
            $this->delivery_type = (string)$element->delivery_type;
        }
        if(!empty($element->city_id)) {
            $this->city_id = (string)$element->city_id;
        }
    }

    public function getOfficeCode() {
        return $this->office_code;
    }

    public function getShipmentType() {
        return $this->shipment_type;
    }

    public function getDeliveryType() {
        return $this->delivery_type;
    }

    public function getCityId() {
        return $this->city_id;
    }

}