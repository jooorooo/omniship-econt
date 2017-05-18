<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 7.2.2017 г.
 * Time: 01:19 ч.
 */

namespace Omniship\Econt\Traits;

use Omniship\Interfaces\ArrayableInterface;

trait Formater
{

    /**
     * @return array
     */
    public function toArray() {
        $arr = [];
        foreach(get_class_vars(get_class($this)) AS $key => $value) {
            if($this->{$key} instanceof ArrayableInterface) {
                $arr[$key] = $this->{$key}->toArray();
            } else {
                $arr[$key] = $this->{$key};
            }
        }
        return $arr;
    }

    /**
     * @param int $options
     * @return string
     */
    public function toJson($options = 0) {
        return json_encode($this->toArray(), $options);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->toJson();
    }

}