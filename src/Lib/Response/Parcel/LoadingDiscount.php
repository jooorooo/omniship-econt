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

class LoadingDiscount implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'amount' => ['type' => 'float'], 'description'
    );

    /**
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->setParameter('amount', $amount);
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setParameter('description', $description);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getParameter('description');
    }
    
}