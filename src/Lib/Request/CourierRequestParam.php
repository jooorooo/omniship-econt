<?php

namespace Omniship\Econt\Lib\Request;

class CourierRequestParam {

	protected $only_courier_request;

	protected $time_from;

	protected $time_to;


	/*
	 * @param $only_courier_request
	 * @return $this
	 */
	public function setOnlyCourierRequest($only_courier_request)
	{
		$this->only_courier_request = $only_courier_request;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOnlyCourierRequest()
	{
		return $this->only_courier_request;
	}

	/*
	 * @param $time_from
	 * @return $this
	 */
	public function setTimeFrom($time_from)
	{
		$this->time_from = $time_from;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getTimeFrom()
	{
		return $this->time_from;
	}

	/*
	 * @param $time_to
	 * @return $this
	 */
	public function setTimeTo($time_to)
	{
		$this->time_to = $time_to;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getTimeTo()
	{
		return $this->time_to;
	}

}