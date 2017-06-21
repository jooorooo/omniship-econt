<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class LoadingRow extends AbstractRequest {

	protected $returned_loading;

	protected $sender;

	protected $receiver;

	protected $courier_request;

	protected $payment;

	protected $shipment;

	protected $services;

	protected $instructions = [];

	protected $packing_list;


	/*
	 * @param ReturnedLoadingParam $returned_loading
	 * @return $this
	 */
	public function setReturnedLoading(ReturnedLoadingParam $returned_loading)
	{
		$this->returned_loading = $returned_loading;
		return $this;
	}

	/*
	 * @return null|ReturnedLoadingParam 
	 */
	public function getReturnedLoading()
	{
		return $this->returned_loading;
	}

	/*
	 * @param SenderParam $sender
	 * @return $this
	 */
	public function setSender(SenderParam $sender)
	{
		$this->sender = $sender;
		return $this;
	}

	/*
	 * @return null|SenderParam 
	 */
	public function getSender()
	{
		return $this->sender;
	}

	/*
	 * @param ReceiverParam $receiver
	 * @return $this
	 */
	public function setReceiver(ReceiverParam $receiver)
	{
		$this->receiver = $receiver;
		return $this;
	}

	/*
	 * @return null|ReceiverParam 
	 */
	public function getReceiver()
	{
		return $this->receiver;
	}

	/*
	 * @param CourierRequestParam $courier_request
	 * @return $this
	 */
	public function setCourierRequest(CourierRequestParam $courier_request)
	{
		$this->courier_request = $courier_request;
		return $this;
	}

	/*
	 * @return null|CourierRequestParam 
	 */
	public function getCourierRequest()
	{
		return $this->courier_request;
	}

	/*
	 * @param PaymentParam $payment
	 * @return $this
	 */
	public function setPayment(PaymentParam $payment)
	{
		$this->payment = $payment;
		return $this;
	}

	/*
	 * @return null|PaymentParam 
	 */
	public function getPayment()
	{
		return $this->payment;
	}

	/*
	 * @param ShipmentParam $shipment
	 * @return $this
	 */
	public function setShipment(ShipmentParam $shipment)
	{
		$this->shipment = $shipment;
		return $this;
	}

	/*
	 * @return null|ShipmentParam 
	 */
	public function getShipment()
	{
		return $this->shipment;
	}

	/*
	 * @param ServicesParam $services
	 * @return $this
	 */
	public function setServices(ServicesParam $services)
	{
		$this->services = $services;
		return $this;
	}

	/*
	 * @return null|ServicesParam 
	 */
	public function getServices()
	{
		return $this->services;
	}

	/*
	 * @param InstructionsParam $instructions
	 * @return $this
	 */
	public function setInstruction(InstructionsParam $instructions)
	{
		$this->instructions[] = $instructions;
		return $this;
	}

	/*
	 * @param InstructionsParam[] $instructions
	 * @return $this
	 */
	public function setInstructions(array $instructions)
	{
		$this->instructions = $instructions;
		return $this;
	}

	/*
	 * @return null|InstructionsParam 
	 */
	public function getInstructions()
	{
		return $this->instructions;
	}

	/*
	 * @param PackingListParam $packing_list
	 * @return $this
	 */
	public function setPackingList(PackingListParam $packing_list)
	{
		$this->packing_list = $packing_list;
		return $this;
	}

	/*
	 * @return null|PackingListParam 
	 */
	public function getPackingList()
	{
		return $this->packing_list;
	}

}