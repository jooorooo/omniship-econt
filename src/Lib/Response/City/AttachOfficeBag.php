<?php
/**
 * Offices Bag
 */
namespace Omniship\Econt\Lib\Response\City;

use SimpleXMLElement;
use Omniship\Helper\Collection;

class AttachOfficeBag extends Collection
{
    /**
     * Constructor
     *
     * @param array $offices An array of offices
     */
    public function __construct($offices = array())
    {
        if($offices instanceof SimpleXMLElement) {
            $tmp = $offices;
            $offices = [];
            foreach ($tmp->children() as $shipment_type) {
                /** @var $shipment SimpleXMLElement */
                $shipment = $shipment_type;
                foreach ($shipment->children() as $delivery_type) {
                    /** @var $delivery SimpleXMLElement */
                    $delivery = $delivery_type;
                    foreach ($delivery->office_code as $office_code) {
                        $offices[] = [
                            'office_code' => (string)$office_code,
                            'shipment_type' => $shipment->getName(),
                            'delivery_type' => $delivery->getName()
                        ];
                    }
                }
            }
        }
        $offices = array_map(function($office) {
            return $office instanceof AttachOffice ? $office : new AttachOffice($office);
        }, $offices);
        parent::__construct($offices);
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if(!($value instanceof AttachOffice)) {
            $value = new AttachOffice($value);
        }
        parent::offsetSet($key, $value);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return AttachOffice[]
     */
    public function all()
    {
        return parent::all();
    }
}
