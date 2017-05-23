<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 23.5.2017 г.
 * Time: 09:55 ч.
 */

namespace Omniship\Econt\Lib\Interfaces;

interface ErrorResponseInterface
{

    /**
     * @return string
     */
    public function getError();

    /**
     * @return string
     */
    public function getErrorCode();

}