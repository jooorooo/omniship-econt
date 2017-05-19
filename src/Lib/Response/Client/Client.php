<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:29 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Interfaces\ArrayableInterface;
use Omniship\Interfaces\JsonableInterface;
use Omniship\Traits\Parameters;

class Client implements ArrayableInterface, JsonableInterface
{

    use Parameters;

    protected $values = array(
        'id' => ['type' => 'float'],
        'ein', 'name', 'name_en', 'client_type',
        'key_word', 'cd_agreements' => ['sub_object' => CdAgreementBag::class],
        'instructions' => ['sub_object' => InstructionBag::class]
    );

    /**
     * @param float $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setParameter('id', $id);
    }

    /**
     * @return float
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * @param string $ein
     * @return $this
     */
    public function setEin($ein)
    {
        return $this->setParameter('ein', $ein);
    }

    /**
     * @return string
     */
    public function getEin()
    {
        return $this->getParameter('ein');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setParameter('name', $name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getParameter('name');
    }

    /**
     * @param string $name_en
     * @return $this
     */
    public function setNameEn($name_en)
    {
        return $this->setParameter('name_en', $name_en);
    }

    /**
     * @return string
     */
    public function getNameEn()
    {
        return $this->getParameter('name_en');
    }

    /**
     * @param string $client_type
     * @return $this
     */
    public function setClientType($client_type)
    {
        return $this->setParameter('client_type', $client_type);
    }

    /**
     * @return string
     */
    public function getClientType()
    {
        return $this->getParameter('client_type');
    }

    /**
     * @param string $key_word
     * @return $this
     */
    public function setKeyWord($key_word)
    {
        return $this->setParameter('key_word', $key_word);
    }

    /**
     * @return string
     */
    public function getKeyWord()
    {
        return $this->getParameter('key_word');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Client\CdAgreementBag|array|null $cd_agreements
     * @return $this
     */
    public function setCdAgreements($cd_agreements)
    {
        return $this->setParameter('cd_agreements', $cd_agreements);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Client\CdAgreementBag|array|null
     */
    public function getCdAgreements()
    {
        return $this->getParameter('cd_agreements');
    }

    /**
     * @param \Omniship\Econt\Lib\Response\Client\InstructionBag|array|null $instructions
     * @return $this
     */
    public function setInstructions($instructions)
    {
        return $this->setParameter('instructions', $instructions);
    }

    /**
     * @return \Omniship\Econt\Lib\Response\Client\InstructionBag|array|null
     */
    public function getInstructions()
    {
        return $this->getParameter('instructions');
    }



}