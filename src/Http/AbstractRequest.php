<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Econt\Http;

use DOMDocument;
use SimpleXMLElement;
use GuzzleHttp\Client;
use Omniship\Exceptions\InvalidResponseException;
use Omniship\Message\AbstractRequest AS BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{
    const SERVICE_TESTING_URL = 'http://demo.econt.com/e-econt/xml_service_tool.php';
    const SERVICE_PRODUCTION_URL = 'http://www.econt.com/e-econt/xml_service_tool.php';

    const PARCEL_TESTING_URL = 'http://demo.econt.com/e-econt/xml_parcel_import2.php';
    const PARCEL_PRODUCTION_URL = 'http://www.econt.com/e-econt/xml_parcel_import2.php';

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function sendData($data) {
        $dom = new DOMDocument();
        $dom->loadXML($this->_prepareXML($data));

        $client = new Client();
        $httpRequest = $client->post($this->getEndpoint(), array(
            'form_params' => [
                'xml' => $dom->saveXML()
            ]
        ));
        
        if($httpRequest->getStatusCode() != 200) {
            throw new InvalidResponseException(sprintf('Return response with status code: %s', $httpRequest->getStatusCode()), $httpRequest->getStatusCode());
        }

        if(!$body = $httpRequest->getBody()->getContents()) {
            throw new InvalidResponseException('Return empty response');
        }

        if(!$this->isXMLContentValid($body)) {
            throw new InvalidResponseException('Return invalid XML response');
        }

        return $this->createResponse(new SimpleXMLElement($body));
    }

    /**
     * @param array $data
     * @return string
     */
    protected function _prepareXML($data)
    {
        $xml = '';

        foreach ($data as $key => $value) {
            if ($key && $key == 'error') {
                continue;
            }

            if ($key && ($key == 'p' || $key == 'cd')) {
                $xml .= '<' . $key . ' type="' . $value['type'] . '">' . $value['value'] . '</' . $key . '>' . "\r\n";
            } elseif ($key && ($key == 'shipments')) {
                $xml .= '<' . $key . ' full_tracking="' . $value['type'] . '">' . (is_array($value['value']) ? "\r\n".$this->_prepareXML($value['value']) : $value['value']) . '</' . $key . '>' . "\r\n";
            } elseif($key && $key == 'num') {
                $value = is_array($value) ? $value : [$value];
                foreach($value AS $num) {
                    $xml .= '<' . $key . '>';
                    $xml .= $num;
                    $xml .= '</' . $key . '>' . "\r\n";
                }
            } else {
                if (!is_numeric($key) && $key != 'to_door' && $key != 'to_office') {
                    $xml .= '<' . $key . '>';
                }

                if (is_array($value)) {
                    $xml .= "\r\n" . $this->_prepareXML($value);
                } else {
                    $xml .= $value;
                }

                if (!is_numeric($key) && $key != 'to_door' && $key != 'to_office') {
                    $xml .= '</' . $key . '>' . "\r\n";
                }
            }
        }

        return $xml;
    }

    /**
     * @param string $xmlContent A well-formed XML string
     * @param string $version 1.0
     * @param string $encoding utf-8
     * @return bool
     */
    public function isXMLContentValid($xmlContent, $version = '1.0', $encoding = 'utf-8')
    {
        if (trim($xmlContent) == '') {
            return false;
        }

        libxml_use_internal_errors(true);

        $doc = new DOMDocument($version, $encoding);
        $doc->loadXML($xmlContent);

        $errors = libxml_get_errors();
        libxml_clear_errors();

        return empty($errors);
    }

    abstract protected function createResponse($data);

    abstract public function getEndpoint();

}