<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:25 ч.
 */

namespace Omniship\Econt\Lib\Response\Parcel;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class LoadingPrice implements Arrayable, Jsonable
{

    use Formater;

    public $C;

    public $total;

    public $sender_total;

    public $receiver_total;

    public $other_total;

    public $currency;

    public $currency_code;

    public function __construct(SimpleXMLElement $element)
    {
        if (!empty($element->C)) {
            $this->C = (string)$element->C;
        }
        if (!empty($element->total)) {
            $this->total = (string)$element->total;
        }
        if (!empty($element->sender_total)) {
            $this->sender_total = (string)$element->sender_total;
        }
        if (!empty($element->receiver_total)) {
            $this->receiver_total = (string)$element->receiver_total;
        }
        if (!empty($element->other_total)) {
            $this->other_total = (string)$element->other_total;
        }
        if (!empty($element->currency)) {
            $this->currency = (string)$element->currency;
        }
        if (!empty($element->currency_code)) {
            $this->currency_code = (string)$element->currency_code;
        }
    }

    public function getC()
    {
        return $this->C;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getSenderTotal()
    {
        return $this->sender_total;
    }

    public function getReceiverTotal()
    {
        return $this->receiver_total;
    }

    public function getOtherTotal()
    {
        return $this->other_total;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

}