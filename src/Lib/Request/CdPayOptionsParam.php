<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class CdPayOptionsParam extends AbstractRequest {

	protected $name;

	protected $phone;

	protected $email;

	protected $money_transfer;

	protected $express;

	protected $method;

	protected $BIC;

	protected $IBAN;

	protected $bank_currency;

	protected $pay_schedule_type;

	protected $pay_date;

	protected $pay_weekday_1;

	protected $pay_weekday_2;

	protected $pay_weekday_3;

	protected $pay_weekday_4;

	protected $pay_weekday_5;

	protected $office_code;

	protected $city;

	protected $post_code;

	protected $quarter;

	protected $street;

	protected $street_num;

	protected $other;

	protected $instruction;


	/*
	 * @param $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getName()
	{
		return $this->name;
	}

	/*
	 * @param $phone
	 * @return $this
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/*
	 * @param $email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/*
	 * @param $money_transfer
	 * @return $this
	 */
	public function setMoneyTransfer($money_transfer)
	{
		$this->money_transfer = $money_transfer;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getMoneyTransfer()
	{
		return $this->money_transfer;
	}

	/*
	 * @param $express
	 * @return $this
	 */
	public function setExpress($express)
	{
		$this->express = $express;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getExpress()
	{
		return $this->express;
	}

	/*
	 * @param $method
	 * @return $this
	 */
	public function setMethod($method)
	{
		$this->method = $method;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/*
	 * @param $BIC
	 * @return $this
	 */
	public function setBIC($BIC)
	{
		$this->BIC = $BIC;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getBIC()
	{
		return $this->BIC;
	}

	/*
	 * @param $IBAN
	 * @return $this
	 */
	public function setIBAN($IBAN)
	{
		$this->IBAN = $IBAN;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getIBAN()
	{
		return $this->IBAN;
	}

	/*
	 * @param $bank_currency
	 * @return $this
	 */
	public function setBankCurrency($bank_currency)
	{
		$this->bank_currency = $bank_currency;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getBankCurrency()
	{
		return $this->bank_currency;
	}

	/*
	 * @param $pay_schedule_type
	 * @return $this
	 */
	public function setPayScheduleType($pay_schedule_type)
	{
		$this->pay_schedule_type = $pay_schedule_type;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayScheduleType()
	{
		return $this->pay_schedule_type;
	}

	/*
	 * @param $pay_date
	 * @return $this
	 */
	public function setPayDate($pay_date)
	{
		$this->pay_date = $pay_date;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayDate()
	{
		return $this->pay_date;
	}

	/*
	 * @param $pay_weekday_1
	 * @return $this
	 */
	public function setPayWeekday_1($pay_weekday_1)
	{
		$this->pay_weekday_1 = $pay_weekday_1;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayWeekday_1()
	{
		return $this->pay_weekday_1;
	}

	/*
	 * @param $pay_weekday_2
	 * @return $this
	 */
	public function setPayWeekday_2($pay_weekday_2)
	{
		$this->pay_weekday_2 = $pay_weekday_2;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayWeekday_2()
	{
		return $this->pay_weekday_2;
	}

	/*
	 * @param $pay_weekday_3
	 * @return $this
	 */
	public function setPayWeekday_3($pay_weekday_3)
	{
		$this->pay_weekday_3 = $pay_weekday_3;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayWeekday_3()
	{
		return $this->pay_weekday_3;
	}

	/*
	 * @param $pay_weekday_4
	 * @return $this
	 */
	public function setPayWeekday_4($pay_weekday_4)
	{
		$this->pay_weekday_4 = $pay_weekday_4;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayWeekday_4()
	{
		return $this->pay_weekday_4;
	}

	/*
	 * @param $pay_weekday_5
	 * @return $this
	 */
	public function setPayWeekday_5($pay_weekday_5)
	{
		$this->pay_weekday_5 = $pay_weekday_5;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayWeekday_5()
	{
		return $this->pay_weekday_5;
	}

	/*
	 * @param $office_code
	 * @return $this
	 */
	public function setOfficeCode($office_code)
	{
		$this->office_code = $office_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOfficeCode()
	{
		return $this->office_code;
	}

	/*
	 * @param $city
	 * @return $this
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getCity()
	{
		return $this->city;
	}

	/*
	 * @param $post_code
	 * @return $this
	 */
	public function setPostCode($post_code)
	{
		$this->post_code = $post_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPostCode()
	{
		return $this->post_code;
	}

	/*
	 * @param $quarter
	 * @return $this
	 */
	public function setQuarter($quarter)
	{
		$this->quarter = $quarter;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getQuarter()
	{
		return $this->quarter;
	}

	/*
	 * @param $street
	 * @return $this
	 */
	public function setStreet($street)
	{
		$this->street = $street;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/*
	 * @param $street_num
	 * @return $this
	 */
	public function setStreetNum($street_num)
	{
		$this->street_num = $street_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetNum()
	{
		return $this->street_num;
	}

	/*
	 * @param $other
	 * @return $this
	 */
	public function setOther($other)
	{
		$this->other = $other;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOther()
	{
		return $this->other;
	}

	/*
	 * @param $instruction
	 * @return $this
	 */
	public function setInstruction($instruction)
	{
		$this->instruction = $instruction;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getInstruction()
	{
		return $this->instruction;
	}

}