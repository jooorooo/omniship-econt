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

class CdAgreementBag implements \IteratorAggregate, \Countable, ArrayableInterface, \JsonSerializable, JsonableInterface
{
    /**
     * Event storage
     *
     * @see Event
     *
     * @var array
     */
    protected $agreements;

    /**
     * Constructor
     *
     * @param array $agreements An array of agreements
     */
    public function __construct($agreements = array())
    {
        if($agreements instanceof \SimpleXMLElement) {
            $temporary = [];
            if($agreements->children()->count()) {
                foreach ($agreements AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $agreements = $temporary;
        }
        $this->replace($agreements);
    }

    /**
     * Return all the agreements
     *
     * @see Event
     *
     * @return CdAgreement[]
     */
    public function all()
    {
        return $this->agreements;
    }

    /**
     * Replace the contents of this bag with the specified agreements
     *
     * @see Event
     *
     * @param array $agreements An array of agreements
     */
    public function replace(array $agreements = array())
    {
        $this->agreements = array();
        foreach ($agreements as $agreement) {
            $this->add($agreement);
        }
    }

    /**
     * Add an event to the bag
     *
     * @see Event
     *
     * @param CdAgreement|array $agreement An existing event, or associative array of event parameters
     */
    public function add($agreement)
    {
        if ($agreement instanceof CdAgreement) {
            $this->agreements[] = $agreement;
        } else {
            $this->agreements[] = new CdAgreement($agreement);
        }
    }

    /**
     * Returns an iterator for agreements
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->agreements);
    }

    /**
     * Returns the number of agreements
     *
     * @return int The number of agreements
     */
    public function count()
    {
        return count($this->agreements);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->agreements as $key => $value) {
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