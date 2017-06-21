<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class SystemParam extends AbstractRequest {

	protected $validate;

	protected $response_type;

	protected $only_calculate;

	protected $process_all_parcels;

	protected $email_errors_to;


	/*
	 * @param $validate
	 * @return $this
	 */
	public function setValidate($validate)
	{
		$this->validate = $validate;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getValidate()
	{
		return $this->validate;
	}

	/*
	 * @param $response_type
	 * @return $this
	 */
	public function setResponseType($response_type)
	{
		$this->response_type = $response_type;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getResponseType()
	{
		return $this->response_type;
	}

	/*
	 * @param $only_calculate
	 * @return $this
	 */
	public function setOnlyCalculate($only_calculate)
	{
		$this->only_calculate = $only_calculate;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOnlyCalculate()
	{
		return $this->only_calculate;
	}

	/*
	 * @param $process_all_parcels
	 * @return $this
	 */
	public function setProcessAllParcels($process_all_parcels)
	{
		$this->process_all_parcels = $process_all_parcels;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getProcessAllParcels()
	{
		return $this->process_all_parcels;
	}

	/*
	 * @param $email_errors_to
	 * @return $this
	 */
	public function setEmailErrorsTo($email_errors_to)
	{
		$this->email_errors_to = $email_errors_to;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getEmailErrorsTo()
	{
		return $this->email_errors_to;
	}

}