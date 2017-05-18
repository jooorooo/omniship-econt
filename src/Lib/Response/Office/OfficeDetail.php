<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:38 ч.
 */

namespace Omniship\Econt\Lib\Response\Office;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class OfficeDetail implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'courier' => ['type' => 'bool'], 'post' => ['type' => 'bool'],
        'cargo' => ['type' => 'bool'], 'cargo_express' => ['type' => 'bool']
    );

    /**
     * @param bool|null $courier
     * @return $this
     */
    public function setCourier($courier)
    {
        return $this->setParameter('courier', $courier);
    }

    /**
     * @return bool|null
     */
    public function getCourier()
    {
        return $this->getParameter('courier');
    }

    /**
     * @param bool|null $post
     * @return $this
     */
    public function setPost($post)
    {
        return $this->setParameter('post', $post);
    }

    /**
     * @return bool|null
     */
    public function getPost()
    {
        return $this->getParameter('post');
    }

    /**
     * @param bool|null $cargo
     * @return $this
     */
    public function setCargo($cargo)
    {
        return $this->setParameter('cargo', $cargo);
    }

    /**
     * @return bool|null
     */
    public function getCargo()
    {
        return $this->getParameter('cargo');
    }

    /**
     * @param bool|null $cargo_express
     * @return $this
     */
    public function setCargoExpress($cargo_express)
    {
        return $this->setParameter('cargo_express', $cargo_express);
    }

    /**
     * @return bool|null
     */
    public function getCargoExpress()
    {
        return $this->getParameter('cargo_express');
    }

}