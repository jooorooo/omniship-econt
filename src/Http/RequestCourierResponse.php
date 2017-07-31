<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Omniship\Common\RequestCourier;
use Omniship\Econt\Lib\Response\CancelParcel;

class RequestCourierResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var \Omniship\Econt\Lib\Response\Parcel
     */
    protected $data;

    /**
     * @return bool
     */
    public function getData()
    {
        if(!is_null($this->getCode())) {
            return false;
        }

        $request = new RequestCourier([
            'request_id' => $this->data->getCourierRequestId(),
            'pickup_date' => $this->getRequest()->getStartDate()
        ]);

        return $request;
    }

}