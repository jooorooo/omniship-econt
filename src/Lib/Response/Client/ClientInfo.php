<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:29 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class ClientInfo implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'key_word', 'EIN', 'dds_ein',
        'address', 'mol', 'business_phone',
        'business_email', 'addresses' => []
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
     * @param string|null $key_word
     * @return $this
     */
    public function setKeyWord($key_word)
    {
        return $this->setParameter('key_word', $key_word);
    }

    /**
     * @return string
     */
    public function getKeyWord()
    {
        return $this->getParameter('key_word');
    }

    /**
     * @param string|null $EIN
     * @return $this
     */
    public function setEIN($EIN)
    {
        return $this->setParameter('EIN', $EIN);
    }

    /**
     * @return string
     */
    public function getEIN()
    {
        return $this->getParameter('EIN');
    }

    /**
     * @param string|null $dds_ein
     * @return $this
     */
    public function setDdsEin($dds_ein)
    {
        return $this->setParameter('dds_ein', $dds_ein);
    }

    /**
     * @return string
     */
    public function getDdsEin()
    {
        return $this->getParameter('dds_ein');
    }

    /**
     * @param string|null $address
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
     * @param string|null $mol
     * @return $this
     */
    public function setMol($mol)
    {
        return $this->setParameter('mol', $mol);
    }

    /**
     * @return string
     */
    public function getMol()
    {
        return $this->getParameter('mol');
    }

    /**
     * @param string|null $business_phone
     * @return $this
     */
    public function setBusinessPhone($business_phone)
    {
        return $this->setParameter('business_phone', $business_phone);
    }

    /**
     * @return string
     */
    public function getBusinessPhone()
    {
        return $this->getParameter('business_phone');
    }

    /**
     * @param string|null $business_email
     * @return $this
     */
    public function setBusinessEmail($business_email)
    {
        return $this->setParameter('business_email', $business_email);
    }

    /**
     * @return string
     */
    public function getBusinessEmail()
    {
        return $this->getParameter('business_email');
    }

}