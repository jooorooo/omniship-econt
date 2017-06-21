<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class LoadingsParam extends AbstractRequest {

	protected $row = [];

	/*
	 * @param LoadingRow $row
	 * @return $this
	 */
	public function setRow(LoadingRow $row)
	{
		$this->row[] = $row;
		return $this;
	}

	/*
	 * @param LoadingRow[] $rows
	 * @return $this
	 */
	public function setRows($rows)
	{
		$this->row = $rows;
		return $this;
	}

	/*
	 * @return LoadingRow[]
	 */
	public function getRows()
	{
		return $this->row;
	}

}