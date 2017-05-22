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
use Omniship\Message\AbstractResponse;

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

        $result->setBolId($this->data->getLoadingNum());
        $result->setBillOfLadingType($result::PDF);
        $result->setBillOfLadingSource(base64_encode(file_get_contents($this->data->getPdfUrl())));
        $result->setEstimatedDeliveryDate(Carbon::createFromFormat('Y-m-d', $this->data->getDeliveryDate(), $this->getRequest()->getReceiverTimeZone()));
        $result->setPickupDate($this->getRequest()->getTakingDate());
        $result->setTotal($this->data->getLoadingPrice()->getTotal());

        return $result;
    }

}