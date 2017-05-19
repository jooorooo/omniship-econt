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
use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class Parcel implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'loading_id' => ['type' => 'float'], 'loading_num', 'courier_request_id',
        'delivery_date', 'loading_price' => ['sub_object' => LoadingPrice::class],
        'loading_discount' => ['sub_object' => LoadingDiscount::class], 'error', 'error_code', 'pdf_url',
        'return_reason', 'prev_parcel_num', 'next_parcels'
    );

    /**
     * @param float $loading_id
     * @return $this
     */
    public function setLoadingId($loading_id)
    {
        return $this->setParameter('loading_id', $loading_id);
    }

    /**
     * @return float
     */
    public function getLoadingId()
    {
        return $this->getParameter('loading_id');
    }

    /**
     * @param string $loading_num
     * @return $this
     */
    public function setLoadingNum($loading_num)
    {
        return $this->setParameter('loading_num', $loading_num);
    }

    /**
     * @return string
     */
    public function getLoadingNum()
    {
        return $this->getParameter('loading_num');
    }

    /**
     * @param string $courier_request_id
     * @return $this
     */
    public function setCourierRequestId($courier_request_id)
    {
        return $this->setParameter('courier_request_id', $courier_request_id);
    }

    /**
     * @return string
     */
    public function getCourierRequestId()
    {
        return $this->getParameter('courier_request_id');
    }

    /**
     * @param string $delivery_date
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        return $this->setParameter('delivery_date', $delivery_date);
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->getParameter('delivery_date');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Parcel\LoadingPrice|array|null $loading_price
     * @return $this
     */
    public function setLoadingPrice($loading_price)
    {
        return $this->setParameter('loading_price', $loading_price);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Parcel\LoadingPrice|array|null
     */
    public function getLoadingPrice()
    {
        return $this->getParameter('loading_price');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Parcel\LoadingDiscount|array|null $loading_discount
     * @return $this
     */
    public function setLoadingDiscount($loading_discount)
    {
        return $this->setParameter('loading_discount', $loading_discount);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Parcel\LoadingDiscount|array|null
     */
    public function getLoadingDiscount()
    {
        return $this->getParameter('loading_discount');
    }

    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        return $this->setParameter('error', $error);
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->getParameter('error');
    }

    /**
     * @param string $error_code
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        return $this->setParameter('error_code', $error_code);
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->getParameter('error_code');
    }

    /**
     * @param string $pdf_url
     * @return $this
     */
    public function setPdfUrl($pdf_url)
    {
        return $this->setParameter('pdf_url', $pdf_url);
    }

    /**
     * @return string
     */
    public function getPdfUrl()
    {
        return $this->getParameter('pdf_url');
    }

    /**
     * @param string $return_reason
     * @return $this
     */
    public function setReturnReason($return_reason)
    {
        return $this->setParameter('return_reason', $return_reason);
    }

    /**
     * @return string
     */
    public function getReturnReason()
    {
        return $this->getParameter('return_reason');
    }

    /**
     * @param string $prev_parcel_num
     * @return $this
     */
    public function setPrevParcelNum($prev_parcel_num)
    {
        return $this->setParameter('prev_parcel_num', $prev_parcel_num);
    }

    /**
     * @return string
     */
    public function getPrevParcelNum()
    {
        return $this->getParameter('prev_parcel_num');
    }

    /**
     * @param string $next_parcels
     * @return $this
     */
    public function setNextParcels($next_parcels)
    {
        return $this->setParameter('next_parcels', $next_parcels);
    }

    /**
     * @return string
     */
    public function getNextParcels()
    {
        return $this->getParameter('next_parcels');
    }

}