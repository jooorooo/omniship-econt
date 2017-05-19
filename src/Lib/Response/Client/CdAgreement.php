<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 19.5.2017 г.
 * Time: 13:01 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class CdAgreement implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id', 'num', 'is_bank' => ['type' => 'bool']
    );

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setParameter('id', $id);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * @param string $num
     * @return $this
     */
    public function setNum($num)
    {
        return $this->setParameter('num', $num);
    }

    /**
     * @return string
     */
    public function getNum()
    {
        return $this->getParameter('num');
    }

    /**
     * @param bool $is_bank
     * @return $this
     */
    public function setIsBank($is_bank)
    {
        return $this->setParameter('is_bank', $is_bank);
    }

    /**
     * @return bool
     */
    public function getIsBank()
    {
        return $this->getParameter('is_bank');
    }

}