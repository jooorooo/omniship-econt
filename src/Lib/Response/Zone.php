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

class Zone implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'name', 'name_en', 'national',
        'is_ee' => ['type' => 'bool'],
        'updated_time'
    );

    /**
     * @param float|null $id
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
     * @param string|null $name
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
     * @param string|null $name_en
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
     * @param string|null $national
     * @return $this
     */
    public function setNational($national)
    {
        return $this->setParameter('national', $national);
    }

    /**
     * @return string
     */
    public function getNational()
    {
        return $this->getParameter('national');
    }

    /**
     * @param bool|null $is_ee
     * @return $this
     */
    public function setIsEe($is_ee)
    {
        return $this->setParameter('is_ee', $is_ee);
    }

    /**
     * @return bool
     */
    public function getIsEe()
    {
        return $this->getParameter('is_ee');
    }

    /**
     * @param string|null $updated_time
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