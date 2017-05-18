<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 31.1.2017 г.
 * Time: 00:29 ч.
 */

namespace Omniship\Econt\Lib\Response\Client;

use Omniship\Econt\Traits\Formater;
use Omniship\Interfaces\ArrayableInterface AS Arrayable;
use Omniship\Interfaces\JsonableInterface AS Jsonable;
use SimpleXMLElement;

class Client implements Arrayable, Jsonable
{

    use Formater;

    public $id;

    public $ein;

    public $name;

    public $name_en;

    public $client_type;

    public $key_word;

    public $cd_agreements;

    public $instructions;

    public function __construct(SimpleXMLElement $element)
    {
        if(!empty($element->id)) {
            $this->id = (string)$element->id;
        }
        if(!empty($element->ein)) {
            $this->ein = (string)$element->ein;
        }
        if(!empty($element->name)) {
            $this->name = (string)$element->name;
        }
        if(!empty($element->name_en)) {
            $this->name_en = (string)$element->name_en;
        }
        if(!empty($element->client_type)) {
            $this->client_type = (string)$element->client_type;
        }
        if(!empty($element->key_word)) {
            $this->key_word = (string)$element->key_word;
        }
        $this->cd_agreements = [];
        if(!empty($element->cd_agreements)) {
            foreach($element->cd_agreements->cd_agreement AS $cd) {
                $this->cd_agreements[] = [
                    'id' => (string)$cd->id,
                    'num' => (string)$cd->num,
                    'is_bank' => (string)$cd->is_bank,
                ];
            }
        }
        $this->instructions = [];
        if(!empty($element->instructions)) {
            foreach($element->instructions->e AS $instruction) {
                $this->instructions[] = [
                    'id' => (string)$instruction->id,
                    'type' => (string)$instruction->type,
                    'template' => (string)$instruction->template,
                ];
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getEin() {
        return $this->ein;
    }

    public function getName() {
        return $this->name;
    }

    public function getNameEn() {
        return $this->name_en;
    }

    public function getClientType() {
        return $this->client_type;
    }

    public function getKeyWord() {
        return $this->key_word;
    }

    public function getCdAgreements() {
        return $this->cd_agreements;
    }

    public function getInstructions() {
        return $this->instructions;
    }

}