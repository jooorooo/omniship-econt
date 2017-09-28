<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 18.5.2017 г.
 * Time: 16:25 ч.
 */

namespace Omniship\Econt\Lib\Response\Parcel;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class LoadingPrice implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'C' => ['type' => 'float'],
        'OC' => ['type' => 'float'],
        'total' => ['type' => 'float'],
        'sender_total' => ['type' => 'float'],
        'receiver_total' => ['type' => 'float'],
        'other_total' => ['type' => 'float'],
        'currency', 'currency_code'
    );

    /**
     * @param float $C
     * @return $this
     */
    public function setC($C)
    {
        return $this->setParameter('C', $C);
    }

    /**
     * @return float
     */
    public function getC()
    {
        return $this->getParameter('C');
    }

    /**
     * @param float $C
     * @return $this
     */
    public function setOC($C)
    {
        return $this->setParameter('OC', $C);
    }

    /**
     * @return float
     */
    public function getOC()
    {
        return $this->getParameter('OC');
    }

    /**
     * @param float $total
     * @return $this
     */
    public function setTotal($total)
    {
        return $this->setParameter('total', $total);
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->getParameter('total');
    }

    /**
     * @param float $sender_total
     * @return $this
     */
    public function setSenderTotal($sender_total)
    {
        return $this->setParameter('sender_total', $sender_total);
    }

    /**
     * @return float
     */
    public function getSenderTotal()
    {
        return $this->getParameter('sender_total');
    }

    /**
     * @param float $receiver_total
     * @return $this
     */
    public function setReceiverTotal($receiver_total)
    {
        return $this->setParameter('receiver_total', $receiver_total);
    }

    /**
     * @return float
     */
    public function getReceiverTotal()
    {
        return $this->getParameter('receiver_total');
    }

    /**
     * @param float $other_total
     * @return $this
     */
    public function setOtherTotal($other_total)
    {
        return $this->setParameter('other_total', $other_total);
    }

    /**
     * @return float
     */
    public function getOtherTotal()
    {
        return $this->getParameter('other_total');
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        return $this->setParameter('currency', $currency);
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return strtoupper($this->getParameter('currency'));
    }

    /**
     * @param string $currency_code
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        return $this->setParameter('currency_code', strtoupper($currency_code));
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->getParameter('currency_code');
    }

}