<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Response\City\AttachOfficeBag;
use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class City implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $post_code;

    public $name;

    public $type;

    public $name_en;

    public $region;

    public $region_en;

    public $id_country;

    public $id_office;

    public $updated_time;

    public $hub_code;

    public $hub_name;

    public $hub_name_en;

    public $courier_request_begin_time;

    public $courier_request_begin_time_saturday;

    public $courier_request_end_time;

    public $courier_request_end_time_saturday;

    public $service_days = [];

    public $attach_offices = [];

    public $id_zone;

    public function __construct(SimpleXMLElement $element)
    {
        if (!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if (!empty($element->post_code)) {
            $this->post_code = (string)$element->post_code;
        }
        if (!empty($element->type)) {
            $this->type = $this->_translateType((string)$element->type);
        }
        if (!empty($element->id_zone)) {
            $this->id_zone = (string)$element->id_zone;
        }
        if (!empty($element->name)) {
            $this->name = (string)$element->name;
        }
        if (!empty($element->name_en)) {
            $this->name_en = (string)$element->name_en;
        }
        if (!empty($element->region)) {
            $this->region = (string)$element->region;
        }
        if (!empty($element->region_en)) {
            $this->region_en = (string)$element->region_en;
        }
        if (!empty($element->id_country)) {
            $this->id_country = (string)$element->id_country;
        }
        if (!empty($element->id_office)) {
            $this->id_office = (string)$element->id_office;
        }
        if (!empty($element->updated_time)) {
            $this->updated_time = (string)$element->updated_time;
        }
        if (!empty($element->hub_code)) {
            $this->hub_code = (string)$element->hub_code;
        }
        if (!empty($element->hub_name)) {
            $this->hub_name = (string)$element->hub_name;
        }
        if (!empty($element->hub_name_en)) {
            $this->hub_name_en = (string)$element->hub_name_en;
        }
        if (!empty($element->courier_request_begin_time)) {
            $this->courier_request_begin_time = (string)$element->courier_request_begin_time;
        }
        if (!empty($element->courier_request_begin_time_saturday)) {
            $this->courier_request_begin_time_saturday = (string)$element->courier_request_begin_time_saturday;
        }
        if (!empty($element->courier_request_end_time)) {
            $this->courier_request_end_time = (string)$element->courier_request_end_time;
        }
        if (!empty($element->courier_request_end_time_saturday)) {
            $this->courier_request_end_time_saturday = (string)$element->courier_request_end_time_saturday;
        }
        $this->service_days = [];
        if (!empty($element->service_days)) {
            $this->service_days = (array)$element->service_days;
        }

        $this->attach_offices = new AttachOfficeBag();
        if (isset($element->attach_offices)) {
            foreach ($element->attach_offices->children() as $shipment_type) {
                foreach ($shipment_type->children() as $delivery_type) {
                    foreach ($delivery_type->office_code as $office_code) {
                        $this->attach_offices->add([
                            'office_code' => (string)$office_code,
                            'shipment_type' => $shipment_type->getName(),
                            'delivery_type' => $delivery_type->getName(),
                            'city_id' => (string)$element->id
                        ]);
                    }
                }
            }
        }

    }

    public function getId()
    {
        return $this->id;
    }

    public function getPostCode()
    {
        return $this->post_code;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getIdZone()
    {
        return $this->id_zone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameEn()
    {
        return $this->name_en;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getRegionEn()
    {
        return $this->region_en;
    }

    public function getIdCountry()
    {
        return $this->id_country;
    }

    public function getIdOffice()
    {
        return $this->id_office;
    }

    public function getUpdatedTime()
    {
        return $this->updated_time;
    }

    public function getHubCode()
    {
        return $this->hub_code;
    }

    public function getHubName()
    {
        return $this->hub_name;
    }

    public function getHubNameEn()
    {
        return $this->hub_name_en;
    }


    public function getCourierRequestBeginTime()
    {
        return $this->courier_request_begin_time;
    }

    public function getCourierRequestBeginTimeSaturday()
    {
        return $this->courier_request_begin_time_saturday;
    }

    public function getCourierRequestEndTime()
    {
        return $this->courier_request_end_time;
    }

    public function getCourierRequestEndTimeSaturday()
    {
        return $this->courier_request_end_time_saturday;
    }

    public function getServiceDays()
    {
        return $this->service_days;
    }

    /**
     * @return array|ResponseAttachOfficeBag
     */
    public function getAttachOffices()
    {
        return $this->attach_offices;
    }

    protected function _translateType($type)
    {
        if ($type == 'с.') {
            return 'village';
        }
        if ($type == 'гр.') {
            return 'city';
        }
        return $type;
    }

}