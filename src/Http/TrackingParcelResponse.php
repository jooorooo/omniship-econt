<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\Component;
use Omniship\Common\EventBag;
use Omniship\Common\TrackingBag;
use Omniship\Message\AbstractResponse;

class TrackingParcelResponse extends AbstractResponse
{
    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @return TrackingBag
     */
    public function getData()
    {
        $result = new TrackingBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->data->shipments->e)) {
            foreach($this->data->shipments->e->tracking->row AS $quote) {
                $quote = json_decode(json_encode($quote));
                $result->add([
                    'id' => md5($quote->time),
                    'name' => $quote->name,
                    'events' => $this->_getEvents($quote),
                    'shipment_date' => Carbon::createFromFormat('Y-m-d H:i:s', $quote->evn_time),
                    'estimated_delivery_date' => null,
                    'origin_service_area' => null,
                    'destination_service_area' => new Component(['id' => md5(json_encode($quote->name)), 'name' => $quote->name]),
                ]);
            }
        }
        return $result;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(!empty($this->data->shipments->e->error)) {
            return (string)str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', $this->data->shipments->e->error);
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(!empty($this->data->shipments->e->errorCode)) {
            return (string)$this->data->shipments->e->errorCode;
        }
        return null;
    }

    /**
     * @param $data
     * @return EventBag
     */
    protected function _getEvents($data)
    {
        $result = new EventBag();
        if(!empty($data->event)) {
            $result->add(new Component([
                'id' => $data->event,
                'name' => $data->name,
            ]));
        }
        return $result;
    }

}