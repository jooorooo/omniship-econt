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

class Instruction implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id', 'type', 'template'
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
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /**
     * @param string $template
     * @return $this
     */
    public function setTemplate($template)
    {
        return $this->setParameter('template', $template);
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->getParameter('template');
    }

}