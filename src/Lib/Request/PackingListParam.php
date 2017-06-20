<?php

namespace Omniship\Econt\Lib\Request;

class PackingListParam {

	protected $partial_delivery;

	protected $type;

	protected $row;


	/*
	 * @param $partial_delivery
	 * @return $this
	 */
	public function setPartialDelivery($partial_delivery)
	{
		$this->partial_delivery = $partial_delivery;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPartialDelivery()
	{
		return $this->partial_delivery;
	}

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
	 * @param RowParam $row
	 * @return $this
	 */
	public function setRow(RowParam $row)
	{
		$this->row = $row;
		return $this;
	}

	/*
	 * @return null|RowParam 
	 */
	public function getRow()
	{
		return $this->row;
	}

}