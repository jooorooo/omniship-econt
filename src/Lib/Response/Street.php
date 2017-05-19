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

class Street implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'name', 'name_en', 'city_post_code',
        'id_city' => ['type' => 'float'], 'updated_time'
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
     * @param string $updated_time
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        return $this->setParameter('updated_time', $updated_time);
    }

    /**
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->getParameter('updated_time');
    }
    
}