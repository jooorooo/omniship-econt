<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Omniship\Econt\Lib\Response\CancelParcel;

class RequestCourierResponse extends AbstractResponse
{

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode())) {
            return false;
        }

        var_dump($this->data); exit;

        $bol_id = (string)$this->getRequest()->getBolId();
        /** @var $result CancelParcel */
        $result = !empty($this->data[$bol_id]) ? $this->data[$bol_id] : false;
        if(!$result->getSuccess()) {
            $this->error = $result->getError();
            $this->errorCode = $result->getErrorCode();
            return false;
        }
        return true;
    }

}