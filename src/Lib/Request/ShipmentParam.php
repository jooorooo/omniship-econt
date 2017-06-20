<?php

namespace Omniship\Econt\Lib\Request;

class ShipmentParam {

	protected $envelope_num;

	protected $shipment_type;

	protected $description;

	protected $pack_count;

	protected $weight;

	protected $tariff_code;

	protected $tariff_sub_code;

	protected $invoice_before_pay_CD;

	protected $pay_after_accept;

	protected $pay_after_test;

	protected $instruction_returns;

	protected $send_date;

	protected $delivery_day;

	protected $size_under_60cm;

	protected $order_num;


	/*
	 * @param $envelope_num
	 * @return $this
	 */
	public function setEnvelopeNum($envelope_num)
	{
		$this->envelope_num = $envelope_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getEnvelopeNum()
	{
		return $this->envelope_num;
	}

	/*
	 * @param $shipment_type
	 * @return $this
	 */
	public function setShipmentType($shipment_type)
	{
		$this->shipment_type = $shipment_type;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getShipmentType()
	{
		return $this->shipment_type;
	}

	/*
	 * @param $description
	 * @return $this
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/*
	 * @param $pack_count
	 * @return $this
	 */
	public function setPackCount($pack_count)
	{
		$this->pack_count = $pack_count;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPackCount()
	{
		return $this->pack_count;
	}

	/*
	 * @param $weight
	 * @return $this
	 */
	public function setWeight($weight)
	{
		$this->weight = $weight;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/*
	 * @param $tariff_code
	 * @return $this
	 */
	public function setTariffCode($tariff_code)
	{
		$this->tariff_code = $tariff_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getTariffCode()
	{
		return $this->tariff_code;
	}

	/*
	 * @param $tariff_sub_code
	 * @return $this
	 */
	public function setTariffSubCode($tariff_sub_code)
	{
		$this->tariff_sub_code = $tariff_sub_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getTariffSubCode()
	{
		return $this->tariff_sub_code;
	}

	/*
	 * @param $invoice_before_pay_CD
	 * @return $this
	 */
	public function setInvoiceBeforePayCd($invoice_before_pay_CD)
	{
		$this->invoice_before_pay_CD = $invoice_before_pay_CD;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getInvoiceBeforePayCd()
	{
		return $this->invoice_before_pay_CD;
	}

	/*
	 * @param $pay_after_accept
	 * @return $this
	 */
	public function setPayAfterAccept($pay_after_accept)
	{
		$this->pay_after_accept = $pay_after_accept;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayAfterAccept()
	{
		return $this->pay_after_accept;
	}

	/*
	 * @param $pay_after_test
	 * @return $this
	 */
	public function setPayAfterTest($pay_after_test)
	{
		$this->pay_after_test = $pay_after_test;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPayAfterTest()
	{
		return $this->pay_after_test;
	}

	/*
	 * @param $instruction_returns
	 * @return $this
	 */
	public function setInstructionReturns($instruction_returns)
	{
		$this->instruction_returns = $instruction_returns;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getInstructionReturns()
	{
		return $this->instruction_returns;
	}

	/*
	 * @param $send_date
	 * @return $this
	 */
	public function setSendDate($send_date)
	{
		$this->send_date = $send_date;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getSendDate()
	{
		return $this->send_date;
	}

	/*
	 * @param $delivery_day
	 * @return $this
	 */
	public function setDeliveryDay($delivery_day)
	{
		$this->delivery_day = $delivery_day;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getDeliveryDay()
	{
		return $this->delivery_day;
	}

	/*
	 * @param $size_under_60cm
	 * @return $this
	 */
	public function setSizeUnder_60cm($size_under_60cm)
	{
		$this->size_under_60cm = $size_under_60cm;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getSizeUnder_60cm()
	{
		return $this->size_under_60cm;
	}

	/*
	 * @param $order_num
	 * @return $this
	 */
	public function setOrderNum($order_num)
	{
		$this->order_num = $order_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOrderNum()
	{
		return $this->order_num;
	}

}