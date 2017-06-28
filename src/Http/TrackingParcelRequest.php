<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Econt\Http;

class TrackingParcelRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData() {
        return $this->getBolId();
    }

    public function sendData($data) {
        $tracking = $this->getClient()->trackParcel($data);
        return $this->createResponse($tracking ? $tracking : $this->getClient()->getError());
    }

    /**
     * @param $data
     * @return TrackingParcelResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }

}