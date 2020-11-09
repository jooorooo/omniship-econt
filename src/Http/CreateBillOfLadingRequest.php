<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Econt\Http;

class CreateBillOfLadingRequest extends ShippingQuoteRequest
{
    /**
     * @return array
     */
    public function getData() {
        $data = parent::getData();
        $data['system']['only_calculate'] = 0;
        $data['system']['validate'] = 0;

        return $data;
    }

    public function sendData($data) {
        $result = $this->getClient()->createBillOfLading($data);
        return $this->createResponse($result ? $result : $this->getClient()->getError());
    }

    /**
     * @param $data
     * @return ShippingQuoteResponse
     */
    protected function createResponse($data)
    {
        $this->response = new CreateBillOfLadingResponse($this, $data);
        $this->response->setClient($this->getClient());
        return $this->response;
    }

}