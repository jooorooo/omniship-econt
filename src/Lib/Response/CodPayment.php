<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.6.2017 г.
 * Time: 17:24 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Interfaces\ErrorResponseInterface;
use Omniship\Traits\Parameters;

class CodPayment implements ErrorResponseInterface
{

    use Parameters;

    protected $values = array(
        'CD_send_sum' => ['type' => 'float'], 'CD_send_time',
        'error', 'error_code'
    );

    /**
     * @param string $CD_send_time
     * @return $this
     */
    public function setCdSendTime($CD_send_time)
    {
        return $this->setParameter('CD_send_time', $CD_send_time);
    }

    /**
     * @return string
     */
    public function getCdSendTime()
    {
        return $this->getParameter('CD_send_time');
    }

    /**
     * @param float $CD_send_sum
     * @return $this
     */
    public function setCdSendSum($CD_send_sum)
    {
        return $this->setParameter('CD_send_sum', $CD_send_sum);
    }

    /**
     * @return float
     */
    public function getCdSendSum()
    {
        return $this->getParameter('CD_send_sum');
    }

    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        return $this->setParameter('error', $error);
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->getParameter('error');
    }

    /**
     * @param string $error_code
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        return $this->setParameter('error_code', $error_code);
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->getParameter('error_code');
    }

}