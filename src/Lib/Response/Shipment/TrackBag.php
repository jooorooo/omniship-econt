<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:25 ч.
 */

namespace Omniship\Econt\Lib\Response\Shipment;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use SimpleXMLElement;

class TrackBag implements \IteratorAggregate, \Countable, ArrayableInterface, \JsonSerializable, JsonableInterface
{
    /**
     * Event storage
     *
     * @see Event
     *
     * @var array
     */
    protected $tracks;

    /**
     * Constructor
     *
     * @param array $tracks An array of tracks
     */
    public function __construct($tracks = array())
    {
        if($tracks instanceof \SimpleXMLElement) {
            $temporary = [];
            if(!empty($tracks->row) && $tracks->row->children()->count()) {
                foreach ($tracks->row AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $tracks = $temporary;
        }
        $this->replace($tracks);
    }

    /**
     * Return all the tracks
     *
     * @see Event
     *
     * @return Track[]
     */
    public function all()
    {
        return $this->tracks;
    }

    /**
     * Replace the contents of this bag with the specified tracks
     *
     * @see Event
     *
     * @param array $tracks An array of tracks
     */
    public function replace(array $tracks = array())
    {
        $this->tracks = array();
        foreach ($tracks as $track) {
            $this->add($track);
        }
    }

    /**
     * Add an event to the bag
     *
     * @see Event
     *
     * @param Track|array $track An existing event, or associative array of event parameters
     */
    public function add($track)
    {
        if ($track instanceof Track) {
            $this->tracks[] = $track;
        } else {
            $this->tracks[] = new Track($track);
        }
    }

    /**
     * Returns an iterator for tracks
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->tracks);
    }

    /**
     * Returns the number of tracks
     *
     * @return int The number of tracks
     */
    public function count()
    {
        return count($this->tracks);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->tracks as $key => $value) {
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