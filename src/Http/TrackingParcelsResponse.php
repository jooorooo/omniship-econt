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
use Omniship\Common\TrackingMultipleBag;
use Omniship\Econt\Lib\Response\Shipment;

class TrackingParcelsResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var Shipment
     */
    protected $data;

    /**
     * @return TrackingMultipleBag
     */
    public function getData()
    {
        $results = new TrackingMultipleBag();
        if(!$this->data || !is_array($this->data) || !is_null($this->getCode())) {
            return $results;
        }
        /** @var \Omniship\Econt\Lib\Response\Shipment $tracking */
        foreach($this->data AS $tracking) {
            $row = 0;
            $result = new TrackingBag();
            if(!empty($tracking->getError())) {
                $result->push([
                    'error' => $tracking->getError(),
                    'error_code' => $tracking->getErrorCode(),
                ]);
            } else {
                foreach ($tracking->getTracking()->all() as $quote) {
                    if(!$row && $quote->getEvent() == 'office') {
                        $quote->setEvent('sender_office');
                    }
                    $result->push([
                        'id' => md5($quote->getTime()),
                        'name' => $quote->getName(),
                        'events' => $this->_getEvents($quote),
                        'shipment_date' => $this->_getTime($quote),
                        'estimated_delivery_date' => Carbon::createFromFormat('Y-m-d', (string)$tracking->getExpectedDeliveryDay(), $this->getRequest()->getReceiverTimeZone()),
                        'origin_service_area' => null,
                        'destination_service_area' => new Component(['id' => md5(json_encode($quote->getName())), 'name' => $quote->getName()]),
                    ]);
                    $row++;
                }
            }
            $results->put($tracking->getLoadingNum(), $result);
        }
        return $results;
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

    /**
     * @param $data
     * @return EventBag
     */
    protected function _getTime(\Omniship\Econt\Lib\Response\Shipment\Track $quote)
    {
        if($quote->getEvnTime() && strpos($quote->getEvnTime(), '1970') === false) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $quote->getEvnTime(), $this->getRequest()->getReceiverTimeZone());
        } elseif($quote->getTime() && strpos($quote->getTime(), '1970') === false) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $quote->getTime(), $this->getRequest()->getReceiverTimeZone());
        }
        return null;
    }

}