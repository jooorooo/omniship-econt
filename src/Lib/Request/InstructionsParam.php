<?php

namespace Omniship\Econt\Lib\Request;

class InstructionsParam {

	protected $e;

	/*
	 * @param E $e
	 * @return $this
	 */
	public function setE(E $e)
	{
		$this->e = $e;
		return $this;
	}

	/*
	 * @return null|E
	 */
	public function getE()
	{
		return $this->e;
	}

}