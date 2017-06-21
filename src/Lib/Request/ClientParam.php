<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class ClientParam extends AbstractRequest {

	protected $username;

	protected $password;


	/*
	 * @param $username
	 * @return $this
	 */
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/*
	 * @param $password
	 * @return $this
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPassword()
	{
		return $this->password;
	}

}