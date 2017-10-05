<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingQuoteBag;
use Omniship\Consts;
use Omniship\Econt\Lib\Response\Parcel;

class ShippingQuoteResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var Parcel
     */
    protected $data;

    /**
     * @return ShippingQuoteBag
     */
    public function getData()
    {
        $result = new ShippingQuoteBag();
        if(!is_null($this->getCode())) {
            return $result;
        }
        $result->push([
            'id' => strtolower($this->getRequest()->getServiceId()),
            'name' => null,
            'description' => null,
            'price' => $this->data->getLoadingPrice()->getTotal(),
            'pickup_date' => Carbon::now($this->request->getSenderTimeZone()),
            'pickup_time' => Carbon::now($this->request->getSenderTimeZone()),
            'delivery_date' => Carbon::createFromFormat('Y-m-d', $this->data->getDeliveryDate(), $this->request->getReceiverTimeZone()),
            'delivery_time' => null,
            'currency' => $this->data->getLoadingPrice()->getCurrencyCode(),
            'tax' => 0,
            'insurance' => $this->data->getLoadingPrice()->getOC() ? : 0,
            'cash_on_delivery' => $this->data->getLoadingPrice()->getCD() ? : 0,
            'exchange_rate' => null,
            'payer' => $this->getRequest()->getPayer() ? : Consts::PAYER_SENDER
        ]);
        return $result;
    }

}