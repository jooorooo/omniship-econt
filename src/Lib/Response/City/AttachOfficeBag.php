<?php
/**
 * Shipping Event Bag
 */
namespace Omniship\Econt\Lib\Response\City;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use SimpleXMLElement;

class AttachOfficeBag implements \IteratorAggregate, \Countable, ArrayableInterface, \JsonSerializable, JsonableInterface
{
    /**
     * Event storage
     *
     * @see Event
     *
     * @var array
     */
    protected $offices;

    /**
     * Constructor
     *
     * @param array $offices An array of offices
     */
    public function __construct($offices = array())
    {
        if($offices instanceof SimpleXMLElement) {
            foreach ($offices->children() as $shipment_type) {
                foreach ($shipment_type->children() as $delivery_type) {
                    foreach ($delivery_type->office_code as $office_code) {
                        $this->add([
                            'office_code' => (string)$office_code,
                            'shipment_type' => $shipment_type->getName(),
                            'delivery_type' => $delivery_type->getName()
                        ]);
                    }
                }
            }
        } elseif(is_array($offices)) {
            $this->replace($offices);
        }
    }

    /**
     * Return all the offices
     *
     * @see Event
     *
     * @return AttachOffice[]
     */
    public function all()
    {
        return $this->offices;
    }

    /**
     * Replace the contents of this bag with the specified offices
     *
     * @see Event
     *
     * @param array $offices An array of offices
     */
    public function replace(array $offices = array())
    {
        $this->offices = array();
        foreach ($offices as $office) {
            $this->add($office);
        }
    }

    /**
     * Add an event to the bag
     *
     * @see Event
     *
     * @param AttachOffice|array $office An existing event, or associative array of event parameters
     */
    public function add($office)
    {
        if ($office instanceof AttachOffice) {
            $this->offices[] = $office;
        } else {
            $this->offices[] = new AttachOffice($office);
        }
    }

    /**
     * Returns an iterator for offices
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->offices);
    }

    /**
     * Returns the number of offices
     *
     * @return int The number of offices
     */
    public function count()
    {
        return count($this->offices);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->offices as $key => $value) {
            if ($value instanceof ArrayableInterface) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
