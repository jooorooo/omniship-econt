<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\Office\OfficeAddress;
use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class PostBox implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'city_type', 'city_name', 'city_name_en',
        'post_code', 'id_city' => ['type' => 'float'],
        'num', 'location', 'address',
        'address_en', 'address_details' => ['sub_object' => OfficeAddress::class]
    );

    /**
     * @param float $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setParameter('id', $id);
    }

    /**
     * @return float
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * @param string $city_type
     * @return $this
     */
    public function setCityType($city_type)
    {
        return $this->setParameter('city_type', $city_type);
    }

    /**
     * @return string
     */
    public function getCityType()
    {
        return $this->getParameter('city_type');
    }

    /**
     * @param string $city_name
     * @return $this
     */
    public function setCityName($city_name)
    {
        return $this->setParameter('city_name', $city_name);
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->getParameter('city_name');
    }

    /**
     * @param string $city_name_en
     * @return $this
     */
    public function setCityNameEn($city_name_en)
    {
        return $this->setParameter('city_name_en', $city_name_en);
    }

    /**
     * @return string
     */
    public function getCityNameEn()
    {
        return $this->getParameter('city_name_en');
    }

    /**
     * @param string $post_code
     * @return $this
     */
    public function setPostCode($post_code)
    {
        return $this->setParameter('post_code', $post_code);
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->getParameter('post_code');
    }

    /**
     * @param float $id_city
     * @return $this
     */
    public function setIdCity($id_city)
    {
        return $this->setParameter('id_city', $id_city);
    }

    /**
     * @return float
     */
    public function getIdCity()
    {
        return $this->getParameter('id_city');
    }

    /**
     * @param string $num
     * @return $this
     */
    public function setNum($num)
    {
        return $this->setParameter('num', $num);
    }

    /**
     * @return string
     */
    public function getNum()
    {
        return $this->getParameter('num');
    }

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        return $this->setParameter('location', $location);
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->getParameter('location');
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        return $this->setParameter('address', $address);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getParameter('address');
    }

    /**
     * @param string $address_en
     * @return $this
     */
    public function setAddressEn($address_en)
    {
        return $this->setParameter('address_en', $address_en);
    }

    /**
     * @return string
     */
    public function getAddressEn()
    {
        return $this->getParameter('address_en');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Office\OfficeAddress|array|null $address_details
     * @return $this
     */
    public function setAddressDetails($address_details)
    {
        return $this->setParameter('address_details', $address_details);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Office\OfficeAddress|array|null
     */
    public function getAddressDetails()
    {
        return $this->getParameter('address_details');
    }
    
}