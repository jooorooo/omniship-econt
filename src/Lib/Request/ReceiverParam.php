<?php

namespace Omniship\Econt\Lib\Request;

class ReceiverParam {

	protected $country_code;

	protected $city;

	protected $post_code;

	protected $address_zip;

	protected $office_code;

	protected $name;

	protected $name_person;

	protected $email;

	protected $quarter;

	protected $street;

	protected $street_num;

	protected $street_bl;

	protected $street_vh;

	protected $street_et;

	protected $street_ap;

	protected $street_other;

	protected $phone_num;

	protected $sms_no;

	protected $bic;

	protected $iban;

	protected $provider_id;


	/*
	 * @param $country_code
	 * @return $this
	 */
	public function setCountryCode($country_code)
	{
		$this->country_code = $country_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getCountryCode()
	{
		return $this->country_code;
	}

	/*
	 * @param $city
	 * @return $this
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getCity()
	{
		return $this->city;
	}

	/*
	 * @param $post_code
	 * @return $this
	 */
	public function setPostCode($post_code)
	{
		$this->post_code = $post_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPostCode()
	{
		return $this->post_code;
	}

	/*
	 * @param $address_zip
	 * @return $this
	 */
	public function setAddressZip($address_zip)
	{
		$this->address_zip = $address_zip;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getAddressZip()
	{
		return $this->address_zip;
	}

	/*
	 * @param $office_code
	 * @return $this
	 */
	public function setOfficeCode($office_code)
	{
		$this->office_code = $office_code;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getOfficeCode()
	{
		return $this->office_code;
	}

	/*
	 * @param $name
	 * @return $this
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getName()
	{
		return $this->name;
	}

	/*
	 * @param $name_person
	 * @return $this
	 */
	public function setNamePerson($name_person)
	{
		$this->name_person = $name_person;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getNamePerson()
	{
		return $this->name_person;
	}

	/*
	 * @param $email
	 * @return $this
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/*
	 * @param $quarter
	 * @return $this
	 */
	public function setQuarter($quarter)
	{
		$this->quarter = $quarter;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getQuarter()
	{
		return $this->quarter;
	}

	/*
	 * @param $street
	 * @return $this
	 */
	public function setStreet($street)
	{
		$this->street = $street;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/*
	 * @param $street_num
	 * @return $this
	 */
	public function setStreetNum($street_num)
	{
		$this->street_num = $street_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetNum()
	{
		return $this->street_num;
	}

	/*
	 * @param $street_bl
	 * @return $this
	 */
	public function setStreetBl($street_bl)
	{
		$this->street_bl = $street_bl;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetBl()
	{
		return $this->street_bl;
	}

	/*
	 * @param $street_vh
	 * @return $this
	 */
	public function setStreetVh($street_vh)
	{
		$this->street_vh = $street_vh;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetVh()
	{
		return $this->street_vh;
	}

	/*
	 * @param $street_et
	 * @return $this
	 */
	public function setStreetEt($street_et)
	{
		$this->street_et = $street_et;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetEt()
	{
		return $this->street_et;
	}

	/*
	 * @param $street_ap
	 * @return $this
	 */
	public function setStreetAp($street_ap)
	{
		$this->street_ap = $street_ap;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetAp()
	{
		return $this->street_ap;
	}

	/*
	 * @param $street_other
	 * @return $this
	 */
	public function setStreetOther($street_other)
	{
		$this->street_other = $street_other;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getStreetOther()
	{
		return $this->street_other;
	}

	/*
	 * @param $phone_num
	 * @return $this
	 */
	public function setPhoneNum($phone_num)
	{
		$this->phone_num = $phone_num;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getPhoneNum()
	{
		return $this->phone_num;
	}

	/*
	 * @param $sms_no
	 * @return $this
	 */
	public function setSmsNo($sms_no)
	{
		$this->sms_no = $sms_no;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getSmsNo()
	{
		return $this->sms_no;
	}

	/*
	 * @param $bic
	 * @return $this
	 */
	public function setBic($bic)
	{
		$this->bic = $bic;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getBic()
	{
		return $this->bic;
	}

	/*
	 * @param $iban
	 * @return $this
	 */
	public function setIban($iban)
	{
		$this->iban = $iban;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getIban()
	{
		return $this->iban;
	}

	/*
	 * @param $provider_id
	 * @return $this
	 */
	public function setProviderId($provider_id)
	{
		$this->provider_id = $provider_id;
		return $this;
	}

	/*
	 * @return null|
	 */
	public function getProviderId()
	{
		return $this->provider_id;
	}

}