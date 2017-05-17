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
            $row = 0;
            foreach($this->data->shipments->e->tracking->row as $quote) {
                $quote = json_decode(json_encode($quote));
                if(!$row && $quote->event == 'office') {
                    $quote->event = 'sender_office';
                }
                $result->add([
                    'id' => md5($quote->time),
                    'name' => $quote->name,
                    'events' => $this->_getEvents($quote),
                    'shipment_date' => Carbon::createFromFormat('Y-m-d H:i:s', $quote->evn_time, $this->getRequest()->getReceiverTimeZone()),
                    'estimated_delivery_date' => Carbon::createFromFormat('Y-m-d', (string)$this->data->shipments->e->expected_delivery_day, $this->getRequest()->getReceiverTimeZone()),
                    'origin_service_area' => null,
                    'destination_service_area' => new Component(['id' => md5(json_encode($quote->name)), 'name' => $quote->name]),
                ]);
                $row++;
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