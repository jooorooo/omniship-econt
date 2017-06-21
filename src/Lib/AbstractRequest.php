<?php

namespace Omniship\Econt\Lib;

class AbstractRequest {

    /**
     * Generates the XML to be sent to DHL
     *
     * @param \XMLWriter $xmlWriter XMl Writer instance
     *
     * @return string
     */
    public function toXML(\XMLWriter $xmlWriter = null)
    {

        $className = explode('\\', get_class($this));
        $className = strtolower(end($className));

        $existing_xml = false;
        if($xmlWriter instanceof \XMLWriter) {
            $existing_xml = true;
        } else {
            $xmlWriter = new \XMLWriter();
            $xmlWriter->openMemory();
            $xmlWriter->setIndent(true);
            $xmlWriter->startDocument('1.0', 'UTF-8');
            $xmlWriter->startElement($className);
        }
        $reflection = new \ReflectionClass($this);
        foreach($reflection->getProperties() AS $property) {
            $this->_write($xmlWriter, $property->getName(), $this->{$property->getName()});
        }

        if(!$existing_xml) {
            $xmlWriter->endElement();
            $xmlWriter->endDocument();
        }

        return $xmlWriter->outputMemory(!$existing_xml);
    }

    protected function _write(\XMLWriter $xmlWriter, $name, $value, $parent = false) {
        if($value) {
            if (is_object($value))
            {
                !$parent ? $xmlWriter->startElement($name) : null;
                $value->toXML($xmlWriter);
                !$parent ? $xmlWriter->endElement() : null;
            }
            elseif(is_array($value))
            {
                if(in_array($name, ['cd', 'p'])) {
                    $xmlWriter->startElement($name);
                    $xmlWriter->writeAttribute('type', !empty($value['type']) ? $value['type'] : '');
                    $xmlWriter->writeRaw(!empty($value['value']) ? $value['value'] : '');
                    $xmlWriter->endElement();
                } else {
                    $string = !empty($value[0]) && (!is_array($value[0]) && is_object($value[0]));
                    $string ? null : $xmlWriter->startElement($name);
                    foreach ($value AS $key => $val) {
                        $this->_write($xmlWriter, $name, $val, !$string);
                    }
                    $string ? null : $xmlWriter->endElement();
                }
            } else
            {
                $xmlWriter->writeElement($name, $value);
            }
        }
    }

}