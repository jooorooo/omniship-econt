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
use Omniship\Econt\Lib\Response\Shipment;

class TrackingParcelResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var Shipment
     */
    protected $data;

    /**
     * @return TrackingBag
     */
    public function getData()
    {
        $result = new TrackingBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        $row = 0;
        foreach($this->data->getTracking()->all() as $quote) {
            if(!$row && $quote->getEvent() == 'office') {
                $quote->setEvent('sender_office');
            }
            $result->push([
                'id' => md5($quote->getTime()),
                'name' => $quote->getName(),
                'events' => $this->_getEvents($quote),
                'shipment_date' => $quote->getEvnTime() ? Carbon::createFromFormat('Y-m-d H:i:s', $quote->getEvnTime(), $this->getRequest()->getReceiverTimeZone()) : Carbon::createFromFormat('Y-m-d H:i', $quote->getTime(), $this->getRequest()->getReceiverTimeZone()),
                'estimated_delivery_date' => Carbon::createFromFormat('Y-m-d', (string)$this->data->getExpectedDeliveryDay(), $this->getRequest()->getReceiverTimeZone()),
                'origin_service_area' => null,
                'destination_service_area' => new Component(['id' => md5(json_encode($quote->getName())), 'name' => $quote->getName()]),
            ]);
            $row++;
        }

        return $result;
    }

    /**
     * @param $data
     * @return EventBag
     */
    protected function _getEvents(Shipment\Track $data)
    {
        $result = new EventBag();
        if($data->getEvent()) {
            $result->push(new Component([
                'id' => $data->getEvent(),
                'name' => $data->getName(),
            ]));
        }
        return $result;
    }

}