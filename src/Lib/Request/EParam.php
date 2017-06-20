<?php

namespace Omniship\Econt\Lib\Request;

class EParam {

	protected $type;

	protected $count;


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
	 * @param $count
	 * @return $this
	 */
	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getCount()
	{
		return $this->count;
	}

}