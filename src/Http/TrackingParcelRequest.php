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
        $trackRequest = [
            'request' => [
                'client' => [
                    'username' => $this->getUsername(),
                    'password' => $this->getPassword(),
                ],
                'request_type' => 'shipments',
                'mediator' => 'simexis',
                'shipments' => [
                    'type' => 'ON',
                    'value' => [
                        'num' => $this->getParcelId()
                    ]
                ]
            ]
        ];

        return $trackRequest;
    }

    /**
     * @param $data
     * @return TrackingParcelResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }

    /**
     * Get url associated to a specific service
     *
     * @return string URL for the service
     */
    public function getEndpoint()
    {
        return $this->getTestMode() ? static::SERVICE_TESTING_URL : static::SERVICE_PRODUCTION_URL;
    }
}