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
use SimpleXMLElement;

class InstructionBag implements \IteratorAggregate, \Countable, ArrayableInterface, \JsonSerializable, JsonableInterface
{
    /**
     * Event storage
     *
     * @see Event
     *
     * @var array
     */
    protected $instructions;

    /**
     * Constructor
     *
     * @param array $instructions An array of instructions
     */
    public function __construct($instructions = array())
    {
        if($instructions instanceof \SimpleXMLElement) {
            $temporary = [];
            if($instructions->children()->count()) {
                foreach ($instructions AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $instructions = $temporary;
        }
        $this->replace($instructions);
    }

    /**
     * Return all the instructions
     *
     * @see Event
     *
     * @return Instruction[]
     */
    public function all()
    {
        return $this->instructions;
    }

    /**
     * Replace the contents of this bag with the specified instructions
     *
     * @see Event
     *
     * @param array $instructions An array of instructions
     */
    public function replace(array $instructions = array())
    {
        $this->instructions = array();
        foreach ($instructions as $instruction) {
            $this->add($instruction);
        }
    }

    /**
     * Add an event to the bag
     *
     * @see Event
     *
     * @param Instruction|array $instruction An existing event, or associative array of event parameters
     */
    public function add($instruction)
    {
        if ($instruction instanceof Instruction) {
            $this->instructions[] = $instruction;
        } else {
            $this->instructions[] = new Instruction($instruction);
        }
    }

    /**
     * Returns an iterator for instructions
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->instructions);
    }

    /**
     * Returns the number of instructions
     *
     * @return int The number of instructions
     */
    public function count()
    {
        return count($this->instructions);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this->instructions as $key => $value) {
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