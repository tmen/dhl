<?php

class address
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
     * @var string $district
     * @access public
     */
    public $district = null;

    /**
     * @var string $country
     * @access public
     */
    public $country = null;

    /**
     * @var string $iso3166
     * @access public
     */
    public $iso3166 = null;

    /**
     * @var string $remark
     * @access public
     */
    public $remark = null;

    /**
     * @param string $street
     * @param string $streetNo
     * @param string $zip
     * @param string $city
     * @param string $district
     * @param string $country
     * @param string $iso3166
     * @param string $remark
     * @access public
     */
    public function __construct($street, $streetNo, $zip, $city, $district, $country, $iso3166, $remark)
    {
      $this->street = $street;
      $this->streetNo = $streetNo;
      $this->zip = $zip;
      $this->city = $city;
      $this->district = $district;
      $this->country = $country;
      $this->iso3166 = $iso3166;
      $this->remark = $remark;
    }

}
