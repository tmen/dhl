<?php

class inputAddress
{

    /**
     * @var string $street
     * @access public
     */
    public $street = null;

    /**
     * @var string $streetNo
     * @access public
     */
    public $streetNo = null;

    /**
     * @var string $zip
     * @access public
     */
    public $zip = null;

    /**
     * @var string $city
     * @access public
     */
    public $city = null;

    /**
     * @var string $countryCode
     * @access public
     */
    public $countryCode = null;

    /**
     * @param string $street
     * @param string $streetNo
     * @param string $zip
     * @param string $city
     * @param string $countryCode
     * @access public
     */
    public function __construct($street, $streetNo, $zip, $city, $countryCode)
    {
      $this->street = $street;
      $this->streetNo = $streetNo;
      $this->zip = $zip;
      $this->city = $city;
      $this->countryCode = $countryCode;
    }

}
