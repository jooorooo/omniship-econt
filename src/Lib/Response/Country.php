<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class Country implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'country_name', 'country_name_en',
        'id_zone' => ['type' => 'float'],
        'zone_name', 'zone_name_en'
    );

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setParameter('id', $id);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * @param string $country_name
     * @return $this
     */
    public function setCountryName($country_name)
    {
        return $this->setParameter('country_name', $country_name);
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->getParameter('country_name');
    }

    /**
     * @param string $country_name_en
     * @return $this
     */
    public function setCountryNameEn($country_name_en)
    {
        return $this->setParameter('country_name_en', $country_name_en);
    }

    /**
     * @return string
     */
    public function getCountryNameEn()
    {
        return $this->getParameter('country_name_en');
    }

    /**
     * @param float $id_zone
     * @return $this
     */
    public function setIdZone($id_zone)
    {
        return $this->setParameter('id_zone', $id_zone);
    }

    /**
     * @return float
     */
    public function getIdZone()
    {
        return $this->getParameter('id_zone');
    }

    /**
     * @param string $zone_name
     * @return $this
     */
    public function setZoneName($zone_name)
    {
        return $this->setParameter('zone_name', $zone_name);
    }

    /**
     * @return string
     */
    public function getZoneName()
    {
        return $this->getParameter('zone_name');
    }

    /**
     * @param string $zone_name_en
     * @return $this
     */
    public function setZoneNameEn($zone_name_en)
    {
        return $this->setParameter('zone_name_en', $zone_name_en);
    }

    /**
     * @return string
     */
    public function getZoneNameEn()
    {
        return $this->getParameter('zone_name_en');
    }

}