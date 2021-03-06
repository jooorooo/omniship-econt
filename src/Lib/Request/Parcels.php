<?php

namespace Omniship\Econt\Lib\Request;

use Omniship\Econt\Lib\AbstractRequest;

class Parcels extends AbstractRequest {

	protected $system;

	protected $client;

	protected $loadings = [];

	protected $letters;


	/*
	 * @param SystemParam $system
	 * @return $this
	 */
	public function setSystem(SystemParam $system)
	{
		$this->system = $system;
		return $this;
	}

	/*
	 * @return null|SystemParam 
	 */
	public function getSystem()
	{
		return $this->system;
	}

	/*
	 * @param ClientParam $client
	 * @return $this
	 */
	public function setClient(ClientParam $client)
	{
		$this->client = $client;
		return $this;
	}

	/*
	 * @return null|ClientParam 
	 */
	public function getClient()
	{
		return $this->client;
	}

	/*
	 * @param LoadingsParam[] $loadings
	 * @return $this
	 */
	public function setLoadings($loadings)
	{
		$this->loadings = $loadings;
		return $this;
	}

	/*
	 * @return null|LoadingsParam 
	 */
	public function getLoadings()
	{
		return $this->loadings;
	}

	/*
	 * @param LoadingsParam $loadings
	 * @return $this
	 */
	public function setLoading(LoadingsParam $loadings)
	{
		$this->loadings[] = $loadings;
		return $this;
	}

	/*
	 * @param LettersParam $letters
	 * @return $this
	 */
	public function setLetters(LettersParam $letters)
	{
		$this->letters = $letters;
		return $this;
	}

	/*
	 * @return null|LettersParam 
	 */
	public function getLetters()
	{
		return $this->letters;
	}

}