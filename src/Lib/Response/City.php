<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\City\AttachOfficeBag;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use Omniship\Traits\Parameters;

class City implements Arrayable, Jsonable
{

    use Parameters {
        Parameters::__construct AS ParametersInitialize;
    }

    protected $values = array(
        'id' => ['type' => 'float'],
        'post_code', 'type', 'id_zone' => ['type' => 'float'],
        'name', 'name_en', 'region',
        'region_en', 'id_country' => ['type' => 'float'],
        'id_office' => ['type' => 'float'],
        'updated_time', 'hub_code', 'hub_name',
        'hub_name_en', 'courier_request_begin_time',
        'courier_request_begin_time_saturday',
        'courier_request_end_time',
        'courier_request_end_time_saturday',
        'service_days' => ['type' => 'array'],
        'attach_offices' => ['sub_object' => AttachOfficeBag::class]
    );

    public function __construct($element)
    {
        $this->ParametersInitialize($element);
        /** @var $offices AttachOfficeBag */
        $offices = $this->getAttachOffices();
        if($offices && $offices->count()) {
            foreach ($offices->all() AS $office) {
                $office->setCityId($this->getId());
            }
        }
    }

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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getParameter('type');
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
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->setParameter('region', $region);
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->getParameter('region');
    }

    /**
     * @param string $region_en
     * @return $this
     */
    public function setRegionEn($region_en)
    {
        return $this->setParameter('region_en', $region_en);
    }

    /**
     * @return string
     */
    public function getRegionEn()
    {
        return $this->getParameter('region_en');
    }

    /**
     * @param float $id_country
     * @return $this
     */
    public function setIdCountry($id_country)
    {
        return $this->setParameter('id_country', $id_country);
    }

    /**
     * @return float
     */
    public function getIdCountry()
    {
        return $this->getParameter('id_country');
    }

    /**
     * @param float $id_office
     * @return $this
     */
    public function setIdOffice($id_office)
    {
        return $this->setParameter('id_office', $id_office);
    }

    /**
     * @return float
     */
    public function getIdOffice()
    {
        return $this->getParameter('id_office');
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

    /**
     * @param string $hub_code
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
     * @param string $hub_name
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
     * @param string $hub_name_en
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

    /**
     * @param string $courier_request_begin_time
     * @return $this
     */
    public function setCourierRequestBeginTime($courier_request_begin_time)
    {
        return $this->setParameter('courier_request_begin_time', $courier_request_begin_time);
    }

    /**
     * @return string
     */
    public function getCourierRequestBeginTime()
    {
        return $this->getParameter('courier_request_begin_time');
    }

    /**
     * @param string $courier_request_begin_time_saturday
     * @return $this
     */
    public function setCourierRequestBeginTimeSaturday($courier_request_begin_time_saturday)
    {
        return $this->setParameter('courier_request_begin_time_saturday', $courier_request_begin_time_saturday);
    }

    /**
     * @return string
     */
    public function getCourierRequestBeginTimeSaturday()
    {
        return $this->getParameter('courier_request_begin_time_saturday');
    }

    /**
     * @param string $courier_request_end_time
     * @return $this
     */
    public function setCourierRequestEndTime($courier_request_end_time)
    {
        return $this->setParameter('courier_request_end_time', $courier_request_end_time);
    }

    /**
     * @return string
     */
    public function getCourierRequestEndTime()
    {
        return $this->getParameter('courier_request_end_time');
    }

    /**
     * @param string $courier_request_end_time_saturday
     * @return $this
     */
    public function setCourierRequestEndTimeSaturday($courier_request_end_time_saturday)
    {
        return $this->setParameter('courier_request_end_time_saturday', $courier_request_end_time_saturday);
    }

    /**
     * @return string
     */
    public function getCourierRequestEndTimeSaturday()
    {
        return $this->getParameter('courier_request_end_time_saturday');
    }

    /**
     * @param array $service_days
     * @return $this
     */
    public function setServiceDays($service_days)
    {
        return $this->setParameter('service_days', $service_days);
    }

    /**
     * @return array
     */
    public function getServiceDays()
    {
        return $this->getParameter('service_days');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\City\AttachOfficeBag|array|null $attach_offices
     * @return $this
     */
    public function setAttachOffices($attach_offices)
    {
        return $this->setParameter('attach_offices', $attach_offices);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\City\AttachOfficeBag|array|null
     */
    public function getAttachOffices()
    {
        return $this->getParameter('attach_offices');
    }

}