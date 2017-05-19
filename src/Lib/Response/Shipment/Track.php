<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:25 ч.
 */

namespace Omniship\Econt\Lib\Response\Shipment;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class Track implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'time', 'is_receipt' => ['type' => 'bool'], 'event',
        'name', 'name_en', 'evn_time', 'evn_office_name',
        'evn_office_name_en', 'evn_city_name',
        'evn_city_name_en', 'evn_country_name', 'evn_country_name_en',
    );

    /**
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        return $this->setParameter('time', $time);
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->getParameter('time');
    }

    /**
     * @param bool $is_receipt
     * @return $this
     */
    public function setIsReceipt($is_receipt)
    {
        return $this->setParameter('is_receipt', $is_receipt);
    }

    /**
     * @return bool
     */
    public function getIsReceipt()
    {
        return $this->getParameter('is_receipt');
    }

    /**
     * @param string $event
     * @return $this
     */
    public function setEvent($event)
    {
        return $this->setParameter('event', $event);
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->getParameter('event');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setParameter('name', $name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getParameter('name');
    }

    /**
     * @param string $name_en
     * @return $this
     */
    public function setNameEn($name_en)
    {
        return $this->setParameter('name_en', $name_en);
    }

    /**
     * @return string
     */
    public function getNameEn()
    {
        return $this->getParameter('name_en');
    }

    /**
     * @param string $evn_time
     * @return $this
     */
    public function setEvnTime($evn_time)
    {
        return $this->setParameter('evn_time', $evn_time);
    }

    /**
     * @return string
     */
    public function getEvnTime()
    {
        return $this->getParameter('evn_time');
    }

    /**
     * @param string $evn_office_name
     * @return $this
     */
    public function setEvnOfficeName($evn_office_name)
    {
        return $this->setParameter('evn_office_name', $evn_office_name);
    }

    /**
     * @return string
     */
    public function getEvnOfficeName()
    {
        return $this->getParameter('evn_office_name');
    }

    /**
     * @param string $evn_office_name_en
     * @return $this
     */
    public function setEvnOfficeNameEn($evn_office_name_en)
    {
        return $this->setParameter('evn_office_name_en', $evn_office_name_en);
    }

    /**
     * @return string
     */
    public function getEvnOfficeNameEn()
    {
        return $this->getParameter('evn_office_name_en');
    }

    /**
     * @param string $evn_city_name
     * @return $this
     */
    public function setEvnCityName($evn_city_name)
    {
        return $this->setParameter('evn_city_name', $evn_city_name);
    }

    /**
     * @return string
     */
    public function getEvnCityName()
    {
        return $this->getParameter('evn_city_name');
    }

    /**
     * @param string $evn_city_name_en
     * @return $this
     */
    public function setEvnCityNameEn($evn_city_name_en)
    {
        return $this->setParameter('evn_city_name_en', $evn_city_name_en);
    }

    /**
     * @return string
     */
    public function getEvnCityNameEn()
    {
        return $this->getParameter('evn_city_name_en');
    }

    /**
     * @param string $evn_country_name
     * @return $this
     */
    public function setEvnCountryName($evn_country_name)
    {
        return $this->setParameter('evn_country_name', $evn_country_name);
    }

    /**
     * @return string
     */
    public function getEvnCountryName()
    {
        return $this->getParameter('evn_country_name');
    }

    /**
     * @param string $evn_country_name_en
     * @return $this
     */
    public function setEvnCountryNameEn($evn_country_name_en)
    {
        return $this->setParameter('evn_country_name_en', $evn_country_name_en);
    }

    /**
     * @return string
     */
    public function getEvnCountryNameEn()
    {
        return $this->getParameter('evn_country_name_en');
    }

}