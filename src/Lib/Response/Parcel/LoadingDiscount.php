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

class LoadingDiscount implements Arrayable, Jsonable
{

    use Formater;

    public $amount;

    public $description;

    public function __construct(SimpleXMLElement $element)
    {
        if (!empty($element->amount)) {
            $this->amount = (string)$element->amount;
        }
        if (!empty($element->description)) {
            $this->description = (string)$element->description;
        }
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDescription()
    {
        return $this->description;
    }
}