<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingServiceBag;
use Omniship\Econt\Lib\Response\Parcel;
use Omniship\Message\AbstractResponse;

class ShippingServicesResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var Parcel
     */
    protected $data;

    /**
     * @return ShippingServiceBag
     */
    public function getData()
    {
        $result = new ShippingServiceBag();
        if(!is_null($this->getCode())) {
            return $result;
        }
        
        $result->add([
            'id' => md5($this->data->getDeliveryDate()),
            'name' => null,
            'description' => null,
            'price' => $this->data->getLoadingPrice()->getTotal(),
            'pickup_date' => Carbon::now($this->request->getSenderTimeZone()),
            'pickup_time' => Carbon::now($this->request->getSenderTimeZone()),
            'delivery_date' => Carbon::createFromFormat('Y-m-d', $this->data->getDeliveryDate(), $this->request->getReceiverTimeZone()),
            'delivery_time' => null,
            'currency' => $this->data->getLoadingPrice()->getCurrency(),
            'tax' => 0,
            'insurance' => 0
        ]);

        return $result;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(is_string($this->data)) {
            return str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', $this->data);
        } elseif($this->data->getErrorCode() || $this->data->getError()) {
            return str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', $this->data->getError());
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(is_string($this->data)) {
            return md5($this->data);
        } elseif($this->data->getErrorCode() || $this->data->getError()) {
            return $this->data->getErrorCode() ? : md5($this->data->getError());
        }
        return null;
    }

}