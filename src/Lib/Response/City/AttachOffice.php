<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 12:42 ч.
 */

namespace Omniship\Econt\Lib\Response\City;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class AttachOffice implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'office_code', 'shipment_type', 'delivery_type',
        'city_id' => ['type' => 'float']
    );

    /**
     * @param string $office_code
     * @return $this
     */
    public function setOfficeCode($office_code)
    {
        return $this->setParameter('office_code', $office_code);
    }

    /**
     * @return string
     */
    public function getOfficeCode()
    {
        return $this->getParameter('office_code');
    }

    /**
     * @param string $shipment_type
     * @return $this
     */
    public function setShipmentType($shipment_type)
    {
        return $this->setParameter('shipment_type', $shipment_type);
    }

    /**
     * @return string
     */
    public function getShipmentType()
    {
        return $this->getParameter('shipment_type');
    }

    /**
     * @param string $delivery_type
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        return $this->setParameter('delivery_type', $delivery_type);
    }

    /**
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->getParameter('delivery_type');
    }

    /**
     * @param float $city_id
     * @return $this
     */
    public function setCityId($city_id)
    {
        return $this->setParameter('city_id', $city_id);
    }

    /**
     * @return float
     */
    public function getCityId()
    {
        return $this->getParameter('city_id');
    }

}