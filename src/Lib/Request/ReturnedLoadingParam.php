<?php

namespace Omniship\Econt\Lib\Request;

class ReturnedLoadingParam {

	protected $first_loading_num;

	protected $first_loading_receiver_phone;


	/*
	 * @param $first_loading_num
	 * @return $this
	 */
	public function setFirstLoadingNum($first_loading_num)
	{
		$this->first_loading_num = $first_loading_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getFirstLoadingNum()
	{
		return $this->first_loading_num;
	}

	/*
	 * @param $first_loading_receiver_phone
	 * @return $this
	 */
	public function setFirstLoadingReceiverPhone($first_loading_receiver_phone)
	{
		$this->first_loading_receiver_phone = $first_loading_receiver_phone;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getFirstLoadingReceiverPhone()
	{
		return $this->first_loading_receiver_phone;
	}

}