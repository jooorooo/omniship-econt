<?php

namespace Omniship\Econt\Lib\Request;

class LettersParam {

	protected $row;


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