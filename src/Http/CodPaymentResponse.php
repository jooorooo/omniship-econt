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

class CodPaymentResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var \Omniship\Econt\Lib\Response\CodPayment
     */
    protected $data;

    /**
     * @return CodPayment
     */
    public function getData()
    {
        if(!is_null($this->getCode()) || empty($this->data) || is_null($this->data->getCdSendTime())) {
            return null;
        }

        $cod_payment = new CodPayment([
            'id' => $this->getRequest()->getBolId(),
            'date' => !empty($this->data->getCdSendTime()) ? Carbon::createFromFormat('Y-m-d H:i:s', $this->data->getCdSendTime(), 'Europe/Sofia') : null,
            'price' => $this->data->getCdSendSum()
        ]);
        return $cod_payment;
    }

}