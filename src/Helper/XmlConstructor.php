<?php

namespace Omniship\Econt\Helper;

use XMLWriter;

class XmlConstructor extends XMLWriter
{

    /**
     * Constructor.
     * @param string $prm_rootElementName A root element's name of a current xml document
     * @access public
     * @param null
     */
    public function __construct($prm_rootElementName = null)
    {
        $this->openMemory();
        $this->setIndent(true);
        $this->setIndentString(' ');
        $this->startDocument('1.0', 'UTF-8');

        if($prm_rootElementName) {
            $this->startElement($prm_rootElementName);
        }
    }

    /**
     * Set an element with a text to a current xml document.
     * @access public
     * @param string $prm_elementName An element's name
     * @param string $prm_ElementText An element's text
     * @param bool $cdata
     * @return null
     */
    public function setElement($prm_elementName, $prm_ElementText, $cdata = false)
    {
        if(!is_numeric($prm_elementName)) {
            $this->startElement($prm_elementName);
        }
        if ($cdata) {
            $this->writeCdata($prm_ElementText);
        } else {
            $this->text($prm_ElementText);
        }
        if(!is_numeric($prm_elementName)) {
            $this->endElement();
        }
    }

    /**
     * Construct elements and texts from an array.
     * The array should contain an attribute's name in index part
     * and a attribute's text in value part.
     * @access public
     * @param array $prm_array Contains attributes and texts
     * @return XmlConstructor
     */
    public function fromArray($prm_array, $cdata = false)
    {
        if (is_array($prm_array)) {
            foreach ($prm_array as $index => $element) {
                if (is_array($element)) {
                    is_numeric($index) ? null : $this->startElement($index);
                    $this->fromArray($element);
                    is_numeric($index) ? null : $this->endElement();
                } else {
                    $this->setElement($index, $element, $cdata);
                }
            }
        }
        return $this;
    }

    /**
     * Return the content of a current xml document.
     * @access public
     * @param null
     * @return string Xml document
     */
    public function getDocument()
    {
        $this->endElement();
        $this->endDocument();
        return $this->outputMemory();
    }
}