<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 11.5.2017 г.
 * Time: 17:18 ч.
 */

namespace Omniship\Econt;

use Carbon\Carbon;
use Omniship\Econt\Http\CancelBillOfLadingRequest;
use Omniship\Econt\Http\CodPaymentRequest;
use Omniship\Econt\Http\CodPaymentsRequest;
use Omniship\Econt\Http\CreateBillOfLadingRequest;
use Omniship\Econt\Http\RequestCourierRequest;
use Omniship\Econt\Http\ShippingQuoteRequest;
use Omniship\Econt\Http\TrackingParcelRequest;
use Omniship\Common\AbstractGateway;
use Omniship\Econt\Http\TrackingParcelsRequest;
use Omniship\Econt\Http\ValidateCredentialsRequest;

class Gateway extends AbstractGateway
{

    private $name = 'Econt';

    const TRACKING_URL = 'http://www.econt.com/tracking/?num=%s';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
        );
    }

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

    /**
     * @param array $parameters
     * @return ShippingQuoteRequest
     */
    public function getQuotes(array $parameters = [])
    {
        return $this->createRequest(ShippingQuoteRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param string $bol_id
     * @return TrackingParcelRequest
     */
    public function trackingParcel($bol_id)
    {
        return $this->createRequest(TrackingParcelRequest::class, $this->setBolId($bol_id)->getParameters());
    }

    /**
     * @param array $bol_ids
     * @return TrackingParcelsRequest
     */
    public function trackingParcels(array $bol_ids = [])
    {
        return $this->createRequest(TrackingParcelsRequest::class, $this->setBolId($bol_ids)->getParameters());
    }

    /**
     * @param array $parameters
     * @return CreateBillOfLadingRequest
     */
    public function createBillOfLading(array $parameters = []) {
        return $this->createRequest(CreateBillOfLadingRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param $bol_id
     * @param null|Carbon $date_start
     * @param null|Carbon $date_end
     * @return RequestCourierRequest
     */
//    public function requestCourier($bol_id, Carbon $date_start = null, Carbon $date_end = null)
//    {
//        return $this->createRequest(RequestCourierRequest::class, $this->setBolId(array_map('floatval', (array)$bol_id))->setStartDate($date_start)->setEndDate($date_end)->getParameters());
//    }

    /**
     * @param $bol_id
     * @return CodPaymentRequest
     */
    public function codPayment($bol_id)
    {
        return $this->createRequest(CodPaymentRequest::class, $this->setBolId($bol_id)->getParameters());
    }

    /**
     * @param array $bol_ids
     * @return CodPaymentRequest
     */
    public function codPayments(array $bol_ids)
    {
        return $this->createRequest(CodPaymentsRequest::class, $this->setBolId($bol_ids)->getParameters());
    }

    /**
     * @param $bol_id
     * @param null $cancelComment
     * @return CancelBillOfLadingRequest
     */
    public function cancelBillOfLading($bol_id, $cancelComment=null) {
        $this->setBolId((float)$bol_id)->setCancelComment($cancelComment);
        return $this->createRequest(CancelBillOfLadingRequest::class, $this->getParameters());
    }

    /**
     * @param array $parameters
     * @param null|bool $test_mode
     *      if set null get mode from currently instance
     * @return ValidateCredentialsRequest
     */
    public function validateCredentials(array $parameters = [], $test_mode = null) {
        $instance = new Gateway();
        $instance->initialize($parameters);
        $instance->setTestMode(is_null($test_mode) ? $this->getTestMode() : (bool)$test_mode);
        return $instance->createRequest(ValidateCredentialsRequest::class, $instance->getParameters());
    }

    /**
     * @return Client
     */
    public function getClient() {
        $client = new Client($this->getUsername(), $this->getPassword());
        $client->setTestMode($this->getTestMode());
        return $client;
    }

    /**
     * @param $parcel_id
     * @return string
     */
    public function trackingUrl($parcel_id) {
        return sprintf(static::TRACKING_URL, $parcel_id);
    }

    /**
     * Supports Cash On Delivery
     *
     * @return boolean True if this gateway supports the Cash On Delivery
     */
    public function supportsCashOnDelivery()
    {
        return true;
    }
    /**
     * Supports Insurance
     *
     * @return boolean True if this gateway supports the Insurance
     */
    public function supportsInsurance()
    {
        return true;
    }
    /**
     * Supports Declared
     *
     * @return boolean True if this gateway supports the Declared
     */
    public function supportsDeclared()
    {
        return true;
    }
}