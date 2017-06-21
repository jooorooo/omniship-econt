<?php

namespace Omniship\Econt\Lib\Request;

class RowParam {

	protected $e;


	/*
	 * @param EParam $e
	 * @return $this
	 */
	public function setE(EParam $e)
	{
		$this->e = $e;
		return $this;
	}

	/*
	 * @return null|EParam 
	 */
	public function getE()
	{
		return $this->e;
	}

}