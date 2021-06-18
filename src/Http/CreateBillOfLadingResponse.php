<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\Bill\Create;
use Omniship\Econt\Lib\Response\Parcel;

class CreateBillOfLadingResponse extends AbstractResponse
{
    /**
     * @var Parcel
     */
    protected $data;

    /**
     * @return Create
     */
    public function getData()
    {
        $result = new Create();
        if(!is_null($this->getCode()) || !($this->data instanceof Parcel)) {
            return $result;
        }
        $price = $this->data->getLoadingPrice();
		
		$delivery_date = null;
		if(preg_match('/^([\d]{4})-([\d]{2})-([\d]{2})$/', $this->data->getDeliveryDate())) {
			$delivery_date = Carbon::createFromFormat('Y-m-d', $this->data->getDeliveryDate(), $this->request->getReceiverTimeZone());
		}
        
        $result->setServiceId(strtolower($this->getRequest()->getServiceId()));
        $result->setBolId((string)$this->data->getLoadingNum());
        $result->setBillOfLadingType($result::PDF);
        $result->setBillOfLadingUrl($this->data->getPdfUrl());
        $result->setEstimatedDeliveryDate($delivery_date);
        $result->setPickupDate($this->getRequest()->getShipmentDate());
        $result->setTotal($price->getTotal());
        $result->setInsurance($price->getOC());
        $result->setCashOnDelivery($price->getCD());
        $result->setCurrency($price->getCurrencyCode());

        return $result;
    }
    /**
     * Get the formatted Request.
     *
     * @return null|string
     */
    public function getRequestFormatted()
    {
        if($client = $this->getClient()) {
            return $client->getLastRequest();
        }

        return null;
    }
    /**
     * {@inheritdoc}
     */
    public function getResponseFormatted()
    {
        if($client = $this->getClient()) {
            return $client->getLastResponse();
        }

        return null;
    }

}