<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 19.5.2017 г.
 * Time: 13:01 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use SimpleXMLElement;
use Omniship\Helper\Collection;

class InstructionBag extends Collection
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
        if ($instructions instanceof SimpleXMLElement) {
            $temporary = [];
            if(!empty($instructions->e)) {
                foreach ($instructions->e AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $instructions = $temporary;
        }

        $instructions = array_map(function ($item) {
            return !($item instanceof Instruction) ? new Instruction($item) : $item;
        }, $instructions);

        parent::__construct($instructions);
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public function offsetSet($key, $value)
    {
        if (!($value instanceof Instruction)) {
            $value = new Instruction($value);
        }
        parent::offsetSet($key, $value);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return Instruction[]
     */
    public function all()
    {
        return parent::all();
    }
}