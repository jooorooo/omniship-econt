<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Econt\Http;

class CodPaymentsRequest extends AbstractRequest
{

    /**
     * @return integer
     */
    public function getData() {
        return $this->getBolId();
    }

    /**
     * @param mixed $bol_id
     * @return CodPaymentsResponse
     */
    public function sendData($bol_id) {
        $response = $bol_id ? $this->getClient()->codPayments($bol_id) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return CodPaymentsResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CodPaymentsResponse($this, $data);
    }

}