<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class ClientAddress implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'city_post_code', 'city', 'quarter',
        'street', 'street_num', 'other'
    );

    /**
     * @param string $city_post_code
     * @return $this
     */
    public function setCityPostCode($city_post_code)
    {
        return $this->setParameter('city_post_code', $city_post_code);
    }

    /**
     * @return string
     */
    public function getCityPostCode()
    {
        return $this->getParameter('city_post_code');
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        return $this->setParameter('city', $city);
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getParameter('city');
    }

    /**
     * @param string $quarter
     * @return $this
     */
    public function setQuarter($quarter)
    {
        return $this->setParameter('quarter', $quarter);
    }

    /**
     * @return string
     */
    public function getQuarter()
    {
        return $this->getParameter('quarter');
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        return $this->setParameter('street', $street);
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->getParameter('street');
    }

    /**
     * @param string $street_num
     * @return $this
     */
    public function setStreetNum($street_num)
    {
        return $this->setParameter('street_num', $street_num);
    }

    /**
     * @return string
     */
    public function getStreetNum()
    {
        return $this->getParameter('street_num');
    }

    /**
     * @param string $other
     * @return $this
     */
    public function setOther($other)
    {
        return $this->setParameter('other', $other);
    }

    /**
     * @return string
     */
    public function getOther()
    {
        return $this->getParameter('other');
    }

}