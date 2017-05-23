<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:08 ч.
 */

namespace Omniship\Econt\Lib\Response;

use Omniship\Econt\Lib\Interfaces\ErrorResponseInterface;
use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class CancelParcel implements ArrayableInterface, JsonableInterface, ErrorResponseInterface
{

    use Parameters;

    protected $values = array(
        'num', 'success' => ['type' => 'bool'], 'error', 'errorCode'
    );

    /**
     * @param float $num
     * @return $this
     */
    public function setNum($num)
    {
        return $this->setParameter('num', $num);
    }

    /**
     * @return float
     */
    public function getNum()
    {
        return $this->getParameter('num');
    }

    /**
     * @param bool $success
     * @return $this
     */
    public function setSuccess($success)
    {
        return $this->setParameter('success', $success);
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return (bool)$this->getParameter('success');
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
     * @param string $errorCode
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        return $this->setParameter('errorCode', $errorCode);
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->getParameter('errorCode');
    }

}