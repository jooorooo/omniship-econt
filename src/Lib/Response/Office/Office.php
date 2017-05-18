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

class Office implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'name','name_en','office_code',
        'is_machine' => ['type' => 'bool'],
        'country_code','id_city' => ['type' => 'float'],
        'post_code','city_name',
        'city_name_en','address','address_en',
        'latitude' => ['type' => 'float'],'longitude' => ['type' => 'float'],
        'address_details' => ['sub_object' => OfficeAddress::class],
        'office_details' => ['sub_object' => OfficeDetail::class],
        'phone','email','work_begin',
        'work_end','work_begin_saturday',
        'work_end_saturday','time_priority',
        'updated_time','hub_code','hub_name','hub_name_en'
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
     * @param string|null $office_code
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
     * @param string|null $is_machine
     * @return $this
     */
    public function setIsMachine($is_machine)
    {
        return $this->setParameter('is_machine', $is_machine);
    }

    /**
     * @return string
     */
    public function getIsMachine()
    {
        return $this->getParameter('is_machine');
    }

    /**
     * @param string|null $country_code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        return $this->setParameter('country_code', $country_code);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getParameter('country_code');
    }

    /**
     * @param string|null $id_city
     * @return $this
     */
    public function setIdCity($id_city)
    {
        return $this->setParameter('id_city', $id_city);
    }

    /**
     * @return string
     */
    public function getIdCity()
    {
        return $this->getParameter('id_city');
    }

    /**
     * @param string|null $post_code
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
     * @param string|null $city_name
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
     * @param string|null $city_name_en
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
     * @param string|null $address_en
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
     * @param string|null $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        return $this->setParameter('latitude', $latitude);
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->getParameter('latitude');
    }

    /**
     * @param string|null $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        return $this->setParameter('longitude', $longitude);
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->getParameter('longitude');
    }

    /**
     * @param OfficeAddress|array|null $address_details
     * @return $this
     */
    public function setAddressDetails($address_details)
    {
        return $this->setParameter('address_details', $address_details);
    }

    /**
     * @return null|OfficeAddress
     */
    public function getAddressDetails()
    {
        return $this->getParameter('address_details');
    }

    /**
     * @param OfficeDetail|array|null $office_details
     * @return $this
     */
    public function setOfficeDetails($office_details)
    {
        return $this->setParameter('office_details', $office_details);
    }

    /**
     * @return null|OfficeDetail
     */
    public function getOfficeDetails()
    {
        return $this->getParameter('office_details');
    }

    /**
     * @param string|null $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        return $this->setParameter('phone', $phone);
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    /**
     * @param string|null $email
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setParameter('email', $email);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * @param string|null $work_begin
     * @return $this
     */
    public function setWorkBegin($work_begin)
    {
        return $this->setParameter('work_begin', $work_begin);
    }

    /**
     * @return string
     */
    public function getWorkBegin()
    {
        return $this->getParameter('work_begin');
    }

    /**
     * @param string|null $work_end
     * @return $this
     */
    public function setWorkEnd($work_end)
    {
        return $this->setParameter('work_end', $work_end);
    }

    /**
     * @return string
     */
    public function getWorkEnd()
    {
        return $this->getParameter('work_end');
    }

    /**
     * @param string|null $work_begin_saturday
     * @return $this
     */
    public function setWorkBeginSaturday($work_begin_saturday)
    {
        return $this->setParameter('work_begin_saturday', $work_begin_saturday);
    }

    /**
     * @return string
     */
    public function getWorkBeginSaturday()
    {
        return $this->getParameter('work_begin_saturday');
    }

    /**
     * @param string|null $work_end_saturday
     * @return $this
     */
    public function setWorkEndSaturday($work_end_saturday)
    {
        return $this->setParameter('work_end_saturday', $work_end_saturday);
    }

    /**
     * @return string
     */
    public function getWorkEndSaturday()
    {
        return $this->getParameter('work_end_saturday');
    }

    /**
     * @param string|null $time_priority
     * @return $this
     */
    public function setTimePriority($time_priority)
    {
        return $this->setParameter('time_priority', $time_priority);
    }

    /**
     * @return string
     */
    public function getTimePriority()
    {
        return $this->getParameter('time_priority');
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

    /**
     * @param string|null $hub_code
     * @return $this
     */
    public function setHubCode($hub_code)
    {
        return $this->setParameter('hub_code', $hub_code);
    }

    /**
     * @return string
     */
    public function getHubCode()
    {
        return $this->getParameter('hub_code');
    }

    /**
     * @param string|null $hub_name
     * @return $this
     */
    public function setHubName($hub_name)
    {
        return $this->setParameter('hub_name', $hub_name);
    }

    /**
     * @return string
     */
    public function getHubName()
    {
        return $this->getParameter('hub_name');
    }

    /**
     * @param string|null $hub_name_en
     * @return $this
     */
    public function setHubNameEn($hub_name_en)
    {
        return $this->setParameter('hub_name_en', $hub_name_en);
    }

    /**
     * @return string
     */
    public function getHubNameEn()
    {
        return $this->getParameter('hub_name_en');
    }

}