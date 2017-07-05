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
        'type', 'days_until_return', 'delivery_fail_action',
        'dp_ap', 'dp_bl', 'dp_city', 'id',
        'dp_post_code', 'dp_email', 'dp_et',
        'dp_face', 'dp_name', 'dp_office',
        'dp_office_code', 'dp_other', 'dp_payment_side',
        'dp_phone', 'dp_quarter', 'dp_return_to',
        'dp_street', 'dp_street_num', 'dp_type',
        'dp_vh', 'print_return_loading', 'reject_delivery_payment_side',
        'reject_return_payment_side', 'return_ap', 'return_bl',
        'return_city', 'return_post_code', 'return_email',
        'return_et', 'return_face', 'return_name',
        'return_office', 'return_office_code', 'return_other',
        'return_phone', 'return_quarter', 'return_street',
        'return_street_num', 'return_vh', 'title',
        'description', 'file_name', 'file_content',
        'template',
    );

    /*
	 * @param $type
	 * @return $this
	 */
    public function setId($type)
    {
        return $this->setParameter('id', $type);
    }

    /*
     * @return null|string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /*
	 * @param $type
	 * @return $this
	 */
    public function setType($type)
    {
        return $this->setParameter('type', $type);
    }

    /*
     * @return null|
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /*
     * @param $days_until_return
     * @return $this
     */
    public function setDaysUntilReturn($days_until_return)
    {
        return $this->setParameter('days_until_return', $days_until_return);
    }

    /*
     * @return null|
     */
    public function getDaysUntilReturn()
    {
        return $this->getParameter('days_until_return');
    }

    /*
     * @param $delivery_fail_action
     * @return $this
     */
    public function setDeliveryFailAction($delivery_fail_action)
    {
        return $this->setParameter('delivery_fail_action', $delivery_fail_action);
    }

    /*
     * @return null|
     */
    public function getDeliveryFailAction()
    {
        return $this->getParameter('delivery_fail_action');
    }

    /*
     * @param $dp_ap
     * @return $this
     */
    public function setDpAp($dp_ap)
    {
        return $this->setParameter('dp_ap', $dp_ap);
    }

    /*
     * @return null|
     */
    public function getDpAp()
    {
        return $this->getParameter('dp_ap');
    }

    /*
     * @param $dp_bl
     * @return $this
     */
    public function setDpBl($dp_bl)
    {
        return $this->setParameter('dp_bl', $dp_bl);
    }

    /*
     * @return null|
     */
    public function getDpBl()
    {
        return $this->getParameter('dp_bl');
    }

    /*
     * @param $dp_city
     * @return $this
     */
    public function setDpCity($dp_city)
    {
        return $this->setParameter('dp_city', $dp_city);
    }

    /*
     * @return null|
     */
    public function getDpCity()
    {
        return $this->getParameter('dp_city');
    }

    /*
     * @param $dp_post_code
     * @return $this
     */
    public function setDpPostCode($dp_post_code)
    {
        return $this->setParameter('dp_post_code', $dp_post_code);
    }

    /*
     * @return null|
     */
    public function getDpPostCode()
    {
        return $this->getParameter('dp_post_code');
    }

    /*
     * @param $dp_email
     * @return $this
     */
    public function setDpEmail($dp_email)
    {
        return $this->setParameter('dp_email', $dp_email);
    }

    /*
     * @return null|
     */
    public function getDpEmail()
    {
        return $this->getParameter('dp_email');
    }

    /*
     * @param $dp_et
     * @return $this
     */
    public function setDpEt($dp_et)
    {
        return $this->setParameter('dp_et', $dp_et);
    }

    /*
     * @return null|
     */
    public function getDpEt()
    {
        return $this->getParameter('dp_et');
    }

    /*
     * @param $dp_face
     * @return $this
     */
    public function setDpFace($dp_face)
    {
        return $this->setParameter('dp_face', $dp_face);
    }

    /*
     * @return null|
     */
    public function getDpFace()
    {
        return $this->getParameter('dp_face');
    }

    /*
     * @param $dp_name
     * @return $this
     */
    public function setDpName($dp_name)
    {
        return $this->setParameter('dp_name', $dp_name);
    }

    /*
     * @return null|
     */
    public function getDpName()
    {
        return $this->getParameter('dp_name');
    }

    /*
     * @param $dp_office
     * @return $this
     */
    public function setDpOffice($dp_office)
    {
        return $this->setParameter('dp_office', $dp_office);
    }

    /*
     * @return null|
     */
    public function getDpOffice()
    {
        return $this->getParameter('dp_office');
    }

    /*
     * @param $dp_office_code
     * @return $this
     */
    public function setDpOfficeCode($dp_office_code)
    {
        return $this->setParameter('dp_office_code', $dp_office_code);
    }

    /*
     * @return null|
     */
    public function getDpOfficeCode()
    {
        return $this->getParameter('dp_office_code');
    }

    /*
     * @param $dp_other
     * @return $this
     */
    public function setDpOther($dp_other)
    {
        return $this->setParameter('dp_other', $dp_other);
    }

    /*
     * @return null|
     */
    public function getDpOther()
    {
        return $this->getParameter('dp_other');
    }

    /*
     * @param $dp_payment_side
     * @return $this
     */
    public function setDpPaymentSide($dp_payment_side)
    {
        return $this->setParameter('dp_payment_side', $dp_payment_side);
    }

    /*
     * @return null|
     */
    public function getDpPaymentSide()
    {
        return $this->getParameter('dp_payment_side');
    }

    /*
     * @param $dp_phone
     * @return $this
     */
    public function setDpPhone($dp_phone)
    {
        return $this->setParameter('dp_phone', $dp_phone);
    }

    /*
     * @return null|
     */
    public function getDpPhone()
    {
        return $this->getParameter('dp_phone');
    }

    /*
     * @param $dp_quarter
     * @return $this
     */
    public function setDpQuarter($dp_quarter)
    {
        return $this->setParameter('dp_quarter', $dp_quarter);
    }

    /*
     * @return null|
     */
    public function getDpQuarter()
    {
        return $this->getParameter('dp_quarter');
    }

    /*
     * @param $dp_return_to
     * @return $this
     */
    public function setDpReturnTo($dp_return_to)
    {
        return $this->setParameter('dp_return_to', $dp_return_to);
    }

    /*
     * @return null|
     */
    public function getDpReturnTo()
    {
        return $this->getParameter('dp_return_to');
    }

    /*
     * @param $dp_street
     * @return $this
     */
    public function setDpStreet($dp_street)
    {
        return $this->setParameter('dp_street', $dp_street);
    }

    /*
     * @return null|
     */
    public function getDpStreet()
    {
        return $this->getParameter('dp_street');
    }

    /*
     * @param $dp_street_num
     * @return $this
     */
    public function setDpStreetNum($dp_street_num)
    {
        return $this->setParameter('dp_street_num', $dp_street_num);
    }

    /*
     * @return null|
     */
    public function getDpStreetNum()
    {
        return $this->getParameter('dp_street_num');
    }

    /*
     * @param $dp_type
     * @return $this
     */
    public function setDpType($dp_type)
    {
        return $this->setParameter('dp_type', $dp_type);
    }

    /*
     * @return null|
     */
    public function getDpType()
    {
        return $this->getParameter('dp_type');
    }

    /*
     * @param $dp_vh
     * @return $this
     */
    public function setDpVh($dp_vh)
    {
        return $this->setParameter('dp_vh', $dp_vh);
    }

    /*
     * @return null|
     */
    public function getDpVh()
    {
        return $this->getParameter('dp_vh');
    }

    /*
     * @param $print_return_loading
     * @return $this
     */
    public function setPrintReturnLoading($print_return_loading)
    {
        return $this->setParameter('print_return_loading', $print_return_loading);
    }

    /*
     * @return null|
     */
    public function getPrintReturnLoading()
    {
        return $this->getParameter('print_return_loading');
    }

    /*
     * @param $reject_delivery_payment_side
     * @return $this
     */
    public function setRejectDeliveryPaymentSide($reject_delivery_payment_side)
    {
        return $this->setParameter('reject_delivery_payment_side', $reject_delivery_payment_side);
    }

    /*
     * @return null|
     */
    public function getRejectDeliveryPaymentSide()
    {
        return $this->getParameter('reject_delivery_payment_side');
    }

    /*
     * @param $reject_return_payment_side
     * @return $this
     */
    public function setRejectReturnPaymentSide($reject_return_payment_side)
    {
        return $this->setParameter('reject_return_payment_side', $reject_return_payment_side);
    }

    /*
     * @return null|
     */
    public function getRejectReturnPaymentSide()
    {
        return $this->getParameter('reject_return_payment_side');
    }

    /*
     * @param $return_ap
     * @return $this
     */
    public function setReturnAp($return_ap)
    {
        return $this->setParameter('return_ap', $return_ap);
    }

    /*
     * @return null|
     */
    public function getReturnAp()
    {
        return $this->getParameter('return_ap');
    }

    /*
     * @param $return_bl
     * @return $this
     */
    public function setReturnBl($return_bl)
    {
        return $this->setParameter('return_bl', $return_bl);
    }

    /*
     * @return null|
     */
    public function getReturnBl()
    {
        return $this->getParameter('return_bl');
    }

    /*
     * @param $return_city
     * @return $this
     */
    public function setReturnCity($return_city)
    {
        return $this->setParameter('return_city', $return_city);
    }

    /*
     * @return null|
     */
    public function getReturnCity()
    {
        return $this->getParameter('return_city');
    }

    /*
     * @param $return_post_code
     * @return $this
     */
    public function setReturnPostCode($return_post_code)
    {
        return $this->setParameter('return_post_code', $return_post_code);
    }

    /*
     * @return null|
     */
    public function getReturnPostCode()
    {
        return $this->getParameter('return_post_code');
    }

    /*
     * @param $return_email
     * @return $this
     */
    public function setReturnEmail($return_email)
    {
        return $this->setParameter('return_email', $return_email);
    }

    /*
     * @return null|
     */
    public function getReturnEmail()
    {
        return $this->getParameter('return_email');
    }

    /*
     * @param $return_et
     * @return $this
     */
    public function setReturnEt($return_et)
    {
        return $this->setParameter('return_et', $return_et);
    }

    /*
     * @return null|
     */
    public function getReturnEt()
    {
        return $this->getParameter('return_et');
    }

    /*
     * @param $return_face
     * @return $this
     */
    public function setReturnFace($return_face)
    {
        return $this->setParameter('return_face', $return_face);
    }

    /*
     * @return null|
     */
    public function getReturnFace()
    {
        return $this->getParameter('return_face');
    }

    /*
     * @param $return_name
     * @return $this
     */
    public function setReturnName($return_name)
    {
        return $this->setParameter('return_name', $return_name);
    }

    /*
     * @return null|
     */
    public function getReturnName()
    {
        return $this->getParameter('return_name');
    }

    /*
     * @param $return_office
     * @return $this
     */
    public function setReturnOffice($return_office)
    {
        return $this->setParameter('return_office', $return_office);
    }

    /*
     * @return null|
     */
    public function getReturnOffice()
    {
        return $this->getParameter('return_office');
    }

    /*
     * @param $return_office_code
     * @return $this
     */
    public function setReturnOfficeCode($return_office_code)
    {
        return $this->setParameter('return_office_code', $return_office_code);
    }

    /*
     * @return null|
     */
    public function getReturnOfficeCode()
    {
        return $this->getParameter('return_office_code');
    }

    /*
     * @param $return_other
     * @return $this
     */
    public function setReturnOther($return_other)
    {
        return $this->setParameter('return_other', $return_other);
    }

    /*
     * @return null|
     */
    public function getReturnOther()
    {
        return $this->getParameter('return_other');
    }

    /*
     * @param $return_phone
     * @return $this
     */
    public function setReturnPhone($return_phone)
    {
        return $this->setParameter('return_phone', $return_phone);
    }

    /*
     * @return null|
     */
    public function getReturnPhone()
    {
        return $this->getParameter('return_phone');
    }

    /*
     * @param $return_quarter
     * @return $this
     */
    public function setReturnQuarter($return_quarter)
    {
        return $this->setParameter('return_quarter', $return_quarter);
    }

    /*
     * @return null|
     */
    public function getReturnQuarter()
    {
        return $this->getParameter('return_quarter');
    }

    /*
     * @param $return_street
     * @return $this
     */
    public function setReturnStreet($return_street)
    {
        return $this->setParameter('return_street', $return_street);
    }

    /*
     * @return null|
     */
    public function getReturnStreet()
    {
        return $this->getParameter('return_street');
    }

    /*
     * @param $return_street_num
     * @return $this
     */
    public function setReturnStreetNum($return_street_num)
    {
        return $this->setParameter('return_street_num', $return_street_num);
    }

    /*
     * @return null|
     */
    public function getReturnStreetNum()
    {
        return $this->getParameter('return_street_num');
    }

    /*
     * @param $return_vh
     * @return $this
     */
    public function setReturnVh($return_vh)
    {
        return $this->setParameter('return_vh', $return_vh);
    }

    /*
     * @return null|
     */
    public function getReturnVh()
    {
        return $this->getParameter('return_vh');
    }

    /*
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setParameter('title', $title);
    }

    /*
     * @return null|
     */
    public function getTitle()
    {
        return $this->getParameter('title');
    }

    /*
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setParameter('description', $description);
    }

    /*
     * @return null|
     */
    public function getDescription()
    {
        return $this->getParameter('description');
    }

    /*
     * @param $file_name
     * @return $this
     */
    public function setFileName($file_name)
    {
        return $this->setParameter('file_name', $file_name);
    }

    /*
     * @return null|
     */
    public function getFileName()
    {
        return $this->getParameter('file_name');
    }

    /*
     * @param $file_content
     * @return $this
     */
    public function setFileContent($file_content)
    {
        return $this->setParameter('file_content', $file_content);
    }

    /*
     * @return null|
     */
    public function getFileContent()
    {
        return $this->getParameter('file_content');
    }

    /*
     * @param $template
     * @return $this
     */
    public function setTemplate($template)
    {
        return $this->setParameter('template', $template);
    }

    /*
     * @return null|
     */
    public function getTemplate()
    {
        return $this->getParameter('template');
    }

}