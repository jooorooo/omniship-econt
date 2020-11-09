<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 23.5.2017 г.
 * Time: 09:35 ч.
 */

namespace Omniship\Econt\Http;

use Omniship\Econt\Client;
use Omniship\Econt\Lib\Interfaces\ErrorResponseInterface;
use Omniship\Message\AbstractResponse AS BaseAbstractResponse;

class AbstractResponse extends BaseAbstractResponse
{

    protected $error;

    protected $errorCode;

    protected $client;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(is_string($this->data)) {
            return preg_replace('~([\s]{2,})~', ' ', str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', $this->data));
        } elseif($this->data instanceof ErrorResponseInterface && ($this->data->getErrorCode() || $this->data->getError())) {
            return preg_replace('~([\s]{2,})~', ' ', str_replace(["\n\r", "\r\n", "\r", "\n"], ' ', $this->data->getError()));
        } elseif(is_string($this->error)) {
            return $this->error;
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
        } elseif($this->data instanceof ErrorResponseInterface && ($this->data->getErrorCode() || $this->data->getError())) {
            return $this->data->getErrorCode() ? : md5($this->data->getError());
        } elseif(is_string($this->errorCode)) {
            return $this->errorCode;
        }
        return null;
    }

    /**
     * @return null|Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     * @return AbstractResponse
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

}