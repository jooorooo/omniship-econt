<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:25 ч.
 */

namespace Omniship\Econt\Lib\Response\Shipment;

use SimpleXMLElement;
use Omniship\Helper\Collection;

class TrackBag extends Collection
{

    /**
     * Constructor
     *
     * @param array $tracks An array of tracks
     */
    public function __construct($tracks = array())
    {
        if($tracks instanceof SimpleXMLElement) {
            $temporary = [];
            if(!empty($tracks->row) && $tracks->row->children()->count()) {
                foreach ($tracks->row AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $tracks = $temporary;
        }

        $tracks = array_map(function($item) {
            return !($item instanceof Track) ? new Track($item) : $item;
        }, is_null($tracks) ? [] : $tracks);

        parent::__construct($tracks);
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
        if(!($value instanceof Track)) {
            $value = new Track($value);
        }
        parent::offsetSet($key, $value);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return Track[]
     */
    public function all()
    {
        return parent::all();
    }
}