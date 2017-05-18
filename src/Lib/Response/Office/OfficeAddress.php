<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response\Office;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class OfficeAddress implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id_quarter' => ['type' => 'float'],
        'quarter_name', 'quarter_name_en',
        'id_street' => ['type' => 'float'],
        'street_name', 'street_name_en',
        'num', 'bl', 'vh', 'et', 'ap', 'other'
    );

    /**
     * @param string|null $id_quarter
     * @return $this
     */
    public function setIdQuarter($id_quarter)
    {
        return $this->setParameter('id_quarter', $id_quarter);
    }

    /**
     * @return string
     */
    public function getIdQuarter()
    {
        return $this->getParameter('id_quarter');
    }

    /**
     * @param string|null $quarter_name
     * @return $this
     */
    public function setQuarterName($quarter_name)
    {
        return $this->setParameter('quarter_name', $quarter_name);
    }

    /**
     * @return string
     */
    public function getQuarterName()
    {
        return $this->getParameter('quarter_name');
    }

    /**
     * @param string|null $quarter_name_en
     * @return $this
     */
    public function setQuarterNameEn($quarter_name_en)
    {
        return $this->setParameter('quarter_name_en', $quarter_name_en);
    }

    /**
     * @return string
     */
    public function getQuarterNameEn()
    {
        return $this->getParameter('quarter_name_en');
    }

    /**
     * @param string|null $id_street
     * @return $this
     */
    public function setIdStreet($id_street)
    {
        return $this->setParameter('id_street', $id_street);
    }

    /**
     * @return string
     */
    public function getIdStreet()
    {
        return $this->getParameter('id_street');
    }

    /**
     * @param string|null $street_name
     * @return $this
     */
    public function setStreetName($street_name)
    {
        return $this->setParameter('street_name', $street_name);
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->getParameter('street_name');
    }

    /**
     * @param string|null $street_name_en
     * @return $this
     */
    public function setStreetNameEn($street_name_en)
    {
        return $this->setParameter('street_name_en', $street_name_en);
    }

    /**
     * @return string
     */
    public function getStreetNameEn()
    {
        return $this->getParameter('street_name_en');
    }

    /**
     * @param string|null $num
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
     * @param string|null $bl
     * @return $this
     */
    public function setBl($bl)
    {
        return $this->setParameter('bl', $bl);
    }

    /**
     * @return string
     */
    public function getBl()
    {
        return $this->getParameter('bl');
    }

    /**
     * @param string|null $vh
     * @return $this
     */
    public function setVh($vh)
    {
        return $this->setParameter('vh', $vh);
    }

    /**
     * @return string
     */
    public function getVh()
    {
        return $this->getParameter('vh');
    }

    /**
     * @param string|null $et
     * @return $this
     */
    public function setEt($et)
    {
        return $this->setParameter('et', $et);
    }

    /**
     * @return string
     */
    public function getEt()
    {
        return $this->getParameter('et');
    }

    /**
     * @param string|null $ap
     * @return $this
     */
    public function setAp($ap)
    {
        return $this->setParameter('ap', $ap);
    }

    /**
     * @return string
     */
    public function getAp()
    {
        return $this->getParameter('ap');
    }

    /**
     * @param string|null $other
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