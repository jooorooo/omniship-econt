<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Econt\Http;

use Carbon\Carbon;
use Omniship\Common\CodPayment;
use Omniship\Common\CodPaymentBag;

class CodPaymentsResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var \Omniship\Econt\Lib\Response\CodPayment[]
     */
    protected $data;

    /**
     * @return CodPayment
     */
    public function getData()
    {
        $result = new CodPaymentBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        foreach($this->data AS $bol_id => $data) {
            $result->put($bol_id, [
                'id' => $bol_id,
                'date' => $data->getCdSendTime() ? Carbon::createFromFormat('Y-m-d H:i:s', $data->getCdSendTime(), 'Europe/Sofia') : null,
                'price' => $data->getCdSendSum(),
                'error' => $data->getError() ? : null
            ]);
        }

        return $result;
    }

}