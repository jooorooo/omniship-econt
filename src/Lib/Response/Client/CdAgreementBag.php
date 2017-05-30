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

class CdAgreementBag extends Collection
{

    /**
     * Constructor
     *
     * @param array $agreements An array of agreements
     */
    public function __construct($agreements = array())
    {
        if($agreements instanceof SimpleXMLElement) {
            $temporary = [];
            if($agreements->children()->count()) {
                foreach ($agreements AS $cd) {
                    $temporary[] = $cd;
                }
            }
            $agreements = $temporary;
        }

        $agreements = array_map(function($item) {
            return !($item instanceof CdAgreement) ? new CdAgreement($item) : $item;
        }, $agreements);

        parent::__construct($agreements);
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
        if(!($value instanceof CdAgreement)) {
            $value = new CdAgreement($value);
        }
        parent::offsetSet($key, $value);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return CdAgreement[]
     */
    public function all()
    {
        return parent::all();
    }
}