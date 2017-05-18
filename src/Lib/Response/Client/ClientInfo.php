<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:29 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class ClientInfo implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $key_word;

    public $EIN;

    public $dds_ein;

    public $address;

    public $mol;

    public $business_phone;

    public $business_email;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if(!empty($element->key_word)) {
            $this->key_word = (string)$element->key_word;
        }
        if(!empty($element->EIN)) {
            $this->EIN = (string)$element->EIN;
        }
        if(!empty($element->dds_ein)) {
            $this->dds_ein = (string)$element->dds_ein;
        }
        if(!empty($element->address)) {
            $this->address = new ClientAddress($element->address);
        }
        if(!empty($element->mol)) {
            $this->mol = (string)$element->mol;
        }
        if(!empty($element->business_phone)) {
            $this->business_phone = (string)$element->business_phone;
        }
        if(!empty($element->business_email)) {
            $this->business_email = (string)$element->business_email;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getKeyWord() {
        return $this->key_word;
    }

    public function getEIN() {
        return $this->EIN;
    }

    public function getDdsEin() {
        return $this->dds_ein;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getMol() {
        return $this->mol;
    }

    public function getPhone() {
        return $this->business_phone;
    }

    public function getEmail() {
        return $this->business_email;
    }

}