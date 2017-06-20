<?php

namespace Omniship\Econt\Lib\Request;

class E {

	protected $type;

	protected $days_until_return;

	protected $delivery_fail_action;

	protected $dp_ap;

	protected $dp_bl;

	protected $dp_city;

	protected $dp_post_code;

	protected $dp_email;

	protected $dp_et;

	protected $dp_face;

	protected $dp_name;

	protected $dp_office;

	protected $dp_office_code;

	protected $dp_other;

	protected $dp_payment_side;

	protected $dp_phone;

	protected $dp_quarter;

	protected $dp_return_to;

	protected $dp_street;

	protected $dp_street_num;

	protected $dp_type;

	protected $dp_vh;

	protected $print_return_loading;

	protected $reject_delivery_payment_side;

	protected $reject_return_payment_side;

	protected $return_ap;

	protected $return_bl;

	protected $return_city;

	protected $return_post_code;

	protected $return_email;

	protected $return_et;

	protected $return_face;

	protected $return_name;

	protected $return_office;

	protected $return_office_code;

	protected $return_other;

	protected $return_phone;

	protected $return_quarter;

	protected $return_street;

	protected $return_street_num;

	protected $return_vh;


	/*
	 * @param $type
	 * @return $this
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getType()
	{
		return $this->type;
	}

	/*
	 * @param $days_until_return
	 * @return $this
	 */
	public function setDaysUntilReturn($days_until_return)
	{
		$this->days_until_return = $days_until_return;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDaysUntilReturn()
	{
		return $this->days_until_return;
	}

	/*
	 * @param $delivery_fail_action
	 * @return $this
	 */
	public function setDeliveryFailAction($delivery_fail_action)
	{
		$this->delivery_fail_action = $delivery_fail_action;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDeliveryFailAction()
	{
		return $this->delivery_fail_action;
	}

	/*
	 * @param $dp_ap
	 * @return $this
	 */
	public function setDpAp($dp_ap)
	{
		$this->dp_ap = $dp_ap;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpAp()
	{
		return $this->dp_ap;
	}

	/*
	 * @param $dp_bl
	 * @return $this
	 */
	public function setDpBl($dp_bl)
	{
		$this->dp_bl = $dp_bl;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpBl()
	{
		return $this->dp_bl;
	}

	/*
	 * @param $dp_city
	 * @return $this
	 */
	public function setDpCity($dp_city)
	{
		$this->dp_city = $dp_city;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpCity()
	{
		return $this->dp_city;
	}

	/*
	 * @param $dp_post_code
	 * @return $this
	 */
	public function setDpPostCode($dp_post_code)
	{
		$this->dp_post_code = $dp_post_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpPostCode()
	{
		return $this->dp_post_code;
	}

	/*
	 * @param $dp_email
	 * @return $this
	 */
	public function setDpEmail($dp_email)
	{
		$this->dp_email = $dp_email;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpEmail()
	{
		return $this->dp_email;
	}

	/*
	 * @param $dp_et
	 * @return $this
	 */
	public function setDpEt($dp_et)
	{
		$this->dp_et = $dp_et;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpEt()
	{
		return $this->dp_et;
	}

	/*
	 * @param $dp_face
	 * @return $this
	 */
	public function setDpFace($dp_face)
	{
		$this->dp_face = $dp_face;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpFace()
	{
		return $this->dp_face;
	}

	/*
	 * @param $dp_name
	 * @return $this
	 */
	public function setDpName($dp_name)
	{
		$this->dp_name = $dp_name;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpName()
	{
		return $this->dp_name;
	}

	/*
	 * @param $dp_office
	 * @return $this
	 */
	public function setDpOffice($dp_office)
	{
		$this->dp_office = $dp_office;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpOffice()
	{
		return $this->dp_office;
	}

	/*
	 * @param $dp_office_code
	 * @return $this
	 */
	public function setDpOfficeCode($dp_office_code)
	{
		$this->dp_office_code = $dp_office_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpOfficeCode()
	{
		return $this->dp_office_code;
	}

	/*
	 * @param $dp_other
	 * @return $this
	 */
	public function setDpOther($dp_other)
	{
		$this->dp_other = $dp_other;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpOther()
	{
		return $this->dp_other;
	}

	/*
	 * @param $dp_payment_side
	 * @return $this
	 */
	public function setDpPaymentSide($dp_payment_side)
	{
		$this->dp_payment_side = $dp_payment_side;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpPaymentSide()
	{
		return $this->dp_payment_side;
	}

	/*
	 * @param $dp_phone
	 * @return $this
	 */
	public function setDpPhone($dp_phone)
	{
		$this->dp_phone = $dp_phone;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpPhone()
	{
		return $this->dp_phone;
	}

	/*
	 * @param $dp_quarter
	 * @return $this
	 */
	public function setDpQuarter($dp_quarter)
	{
		$this->dp_quarter = $dp_quarter;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpQuarter()
	{
		return $this->dp_quarter;
	}

	/*
	 * @param $dp_return_to
	 * @return $this
	 */
	public function setDpReturnTo($dp_return_to)
	{
		$this->dp_return_to = $dp_return_to;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpReturnTo()
	{
		return $this->dp_return_to;
	}

	/*
	 * @param $dp_street
	 * @return $this
	 */
	public function setDpStreet($dp_street)
	{
		$this->dp_street = $dp_street;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpStreet()
	{
		return $this->dp_street;
	}

	/*
	 * @param $dp_street_num
	 * @return $this
	 */
	public function setDpStreetNum($dp_street_num)
	{
		$this->dp_street_num = $dp_street_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpStreetNum()
	{
		return $this->dp_street_num;
	}

	/*
	 * @param $dp_type
	 * @return $this
	 */
	public function setDpType($dp_type)
	{
		$this->dp_type = $dp_type;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpType()
	{
		return $this->dp_type;
	}

	/*
	 * @param $dp_vh
	 * @return $this
	 */
	public function setDpVh($dp_vh)
	{
		$this->dp_vh = $dp_vh;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDpVh()
	{
		return $this->dp_vh;
	}

	/*
	 * @param $print_return_loading
	 * @return $this
	 */
	public function setPrintReturnLoading($print_return_loading)
	{
		$this->print_return_loading = $print_return_loading;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPrintReturnLoading()
	{
		return $this->print_return_loading;
	}

	/*
	 * @param $reject_delivery_payment_side
	 * @return $this
	 */
	public function setRejectDeliveryPaymentSide($reject_delivery_payment_side)
	{
		$this->reject_delivery_payment_side = $reject_delivery_payment_side;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getRejectDeliveryPaymentSide()
	{
		return $this->reject_delivery_payment_side;
	}

	/*
	 * @param $reject_return_payment_side
	 * @return $this
	 */
	public function setRejectReturnPaymentSide($reject_return_payment_side)
	{
		$this->reject_return_payment_side = $reject_return_payment_side;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getRejectReturnPaymentSide()
	{
		return $this->reject_return_payment_side;
	}

	/*
	 * @param $return_ap
	 * @return $this
	 */
	public function setReturnAp($return_ap)
	{
		$this->return_ap = $return_ap;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnAp()
	{
		return $this->return_ap;
	}

	/*
	 * @param $return_bl
	 * @return $this
	 */
	public function setReturnBl($return_bl)
	{
		$this->return_bl = $return_bl;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnBl()
	{
		return $this->return_bl;
	}

	/*
	 * @param $return_city
	 * @return $this
	 */
	public function setReturnCity($return_city)
	{
		$this->return_city = $return_city;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnCity()
	{
		return $this->return_city;
	}

	/*
	 * @param $return_post_code
	 * @return $this
	 */
	public function setReturnPostCode($return_post_code)
	{
		$this->return_post_code = $return_post_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnPostCode()
	{
		return $this->return_post_code;
	}

	/*
	 * @param $return_email
	 * @return $this
	 */
	public function setReturnEmail($return_email)
	{
		$this->return_email = $return_email;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnEmail()
	{
		return $this->return_email;
	}

	/*
	 * @param $return_et
	 * @return $this
	 */
	public function setReturnEt($return_et)
	{
		$this->return_et = $return_et;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnEt()
	{
		return $this->return_et;
	}

	/*
	 * @param $return_face
	 * @return $this
	 */
	public function setReturnFace($return_face)
	{
		$this->return_face = $return_face;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnFace()
	{
		return $this->return_face;
	}

	/*
	 * @param $return_name
	 * @return $this
	 */
	public function setReturnName($return_name)
	{
		$this->return_name = $return_name;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnName()
	{
		return $this->return_name;
	}

	/*
	 * @param $return_office
	 * @return $this
	 */
	public function setReturnOffice($return_office)
	{
		$this->return_office = $return_office;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnOffice()
	{
		return $this->return_office;
	}

	/*
	 * @param $return_office_code
	 * @return $this
	 */
	public function setReturnOfficeCode($return_office_code)
	{
		$this->return_office_code = $return_office_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnOfficeCode()
	{
		return $this->return_office_code;
	}

	/*
	 * @param $return_other
	 * @return $this
	 */
	public function setReturnOther($return_other)
	{
		$this->return_other = $return_other;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnOther()
	{
		return $this->return_other;
	}

	/*
	 * @param $return_phone
	 * @return $this
	 */
	public function setReturnPhone($return_phone)
	{
		$this->return_phone = $return_phone;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnPhone()
	{
		return $this->return_phone;
	}

	/*
	 * @param $return_quarter
	 * @return $this
	 */
	public function setReturnQuarter($return_quarter)
	{
		$this->return_quarter = $return_quarter;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnQuarter()
	{
		return $this->return_quarter;
	}

	/*
	 * @param $return_street
	 * @return $this
	 */
	public function setReturnStreet($return_street)
	{
		$this->return_street = $return_street;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnStreet()
	{
		return $this->return_street;
	}

	/*
	 * @param $return_street_num
	 * @return $this
	 */
	public function setReturnStreetNum($return_street_num)
	{
		$this->return_street_num = $return_street_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnStreetNum()
	{
		return $this->return_street_num;
	}

	/*
	 * @param $return_vh
	 * @return $this
	 */
	public function setReturnVh($return_vh)
	{
		$this->return_vh = $return_vh;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReturnVh()
	{
		return $this->return_vh;
	}

}