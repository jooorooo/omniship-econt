<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 19.5.2017 г.
 * Time: 13:01 ч.
 */

namespace Omniship\Econt\Lib\Response\Parcel;

use Omniship\Econt\Lib\Response\Parcel;
use Omniship\Helper\Collection;

class ParcelBag extends Collection
{

    /**
     * Create a new collection.
     *
     * @param  mixed  $items
     */
    public function __construct($items = [])
    {
        $items = array_map(function($item) {
            return !($item instanceof Parcel) ? new Parcel($item) : $item;
        }, $items);
        parent::__construct($items);
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
        if(!($value instanceof Parcel)) {
            $value = new Parcel($value);
        }
        parent::offsetSet($key, $value);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return Parcel[]
     */
    public function all()
    {
        return parent::all();
    }
}