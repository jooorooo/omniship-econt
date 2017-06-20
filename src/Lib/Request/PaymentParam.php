<?php

namespace Omniship\Econt\Lib\Request;

class PaymentParam {

	protected $side;

	protected $method;

	protected $receiver_share_sum;

	protected $share_percent;

	protected $key_word;


	/*
	 * @param $side
	 * @return $this
	 */
	public function setSide($side)
	{
		$this->side = $side;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getSide()
	{
		return $this->side;
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
	 * @param $receiver_share_sum
	 * @return $this
	 */
	public function setReceiverShareSum($receiver_share_sum)
	{
		$this->receiver_share_sum = $receiver_share_sum;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getReceiverShareSum()
	{
		return $this->receiver_share_sum;
	}

	/*
	 * @param $share_percent
	 * @return $this
	 */
	public function setSharePercent($share_percent)
	{
		$this->share_percent = $share_percent;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getSharePercent()
	{
		return $this->share_percent;
	}

	/*
	 * @param $key_word
	 * @return $this
	 */
	public function setKeyWord($key_word)
	{
		$this->key_word = $key_word;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getKeyWord()
	{
		return $this->key_word;
	}

}