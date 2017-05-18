<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:08 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\Parcel\LoadingDiscount;
use Omniship\Econt\Lib\Response\Parcel\LoadingPrice;
use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class Parcel implements Arrayable, Jsonable
{

    use Formater;

    public $loading_id;
    public $loading_num;
    public $courier_request_id;
    public $delivery_date;
    public $loading_price;
    public $loading_discount;
    public $error;
    public $error_code;
    public $pdf_url;
    public $return_reason;
    public $prev_parcel_num;
    public $next_parcels;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->loading_id)) {
            $this->loading_id = (string)$element->loading_id;
        }
        if(!empty($element->loading_num)) {
            $this->loading_num = (string)$element->loading_num;
        }
        if(!empty($element->courier_request_id)) {
            $this->courier_request_id = (string)$element->courier_request_id;
        }
        if(!empty($element->delivery_date)) {
            $this->delivery_date = (string)$element->delivery_date;
        }
        if(!empty($element->loading_price)) {
            $this->loading_price = new LoadingPrice($element->loading_price);
        }
        if(!empty($element->loading_discount)) {
            $this->loading_discount = new LoadingDiscount($element->loading_discount);
        }
        if(!empty($element->error)) {
            $this->error = (string)$element->error;
        }
        if(!empty($element->error_code)) {
            $this->error_code = (string)$element->error_code;
        }
        if(!empty($element->pdf_url)) {
            $this->pdf_url = (string)$element->pdf_url;
        }
        if(!empty($element->return_reason)) {
            $this->return_reason = (string)$element->return_reason;
        }
        if(!empty($element->prev_parcel_num)) {
            $this->prev_parcel_num = (string)$element->prev_parcel_num;
        }
        if(!empty($element->next_parcels)) {
            $this->next_parcels = (string)$element->next_parcels;
        }
    }

    public function getLoadingId() {
        return $this->loading_id;
    }

    public function getLoadingNum() {
        return $this->loading_num;
    }

    public function getCourierRequestId() {
        return $this->courier_request_id;
    }

    public function getDeliveryDate() {
        return $this->delivery_date;
    }

    public function getLoadingPrice() {
        return $this->loading_price;
    }

    public function getLoadingDiscount() {
        return $this->loading_discount;
    }

    public function getError() {
        return $this->error;
    }

    public function getErrorCode() {
        return $this->error_code;
    }

    public function getPdfUrl() {
        return $this->pdf_url;
    }

    public function getReturnReason() {
        return $this->return_reason;
    }

    public function getPrevParcelNum() {
        return $this->prev_parcel_num;
    }

    public function getNextParcels() {
        return $this->next_parcels;
    }

}