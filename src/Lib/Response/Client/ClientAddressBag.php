<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 19.5.2017 г.
 * Time: 13:01 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;

class ClientAddressBag implements \IteratorAggregate, \Countable, ArrayableInterface, \JsonSerializable, JsonableInterface
{
    /**
     * Event storage
     *
     * @see Event
     *
     * @var array
     */
    protected $addresses;

    /**
     * Constructor
     *
     * @param array $addresses An array of addresses
     */
    public function __construct($addresses = array())
    {
        $this->replace($addresses);
    }

    /**
     * Return all the addresses
     *
     * @see Event
     *
     * @return ClientAddress[]
     */
    public function all()
    {
        return $this->addresses;
    }

    /**
     * Replace the contents of this bag with the specified addresses
     *
     * @see Event
     *
     * @param array $addresses An array of addresses
     */
    public function replace(array $addresses = array())
    {
        $this->addresses = array();
        foreach ($addresses as $address) {
            $this->add($address);
        }
    }

    /**
     * Add an event to the bag
     *
     * @see Event
     *
     * @param ClientAddress|array $address An existing event, or associative array of event parameters
     */
    public function add($address)
    {
        if ($address instanceof ClientAddress) {
            $this->addresses[] = $address;
        } else {
            $this->addresses[] = new ClientAddress($address);
        }
    }

    /**
     * Returns an iterator for addresses
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->addresses);
    }

    /**
     * Returns the number of addresses
     *
     * @return int The number of addresses
     */
    public function count()
    {
        return count($this->addresses);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->addresses as $key => $value) {
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