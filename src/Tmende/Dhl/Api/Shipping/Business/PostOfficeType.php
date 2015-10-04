<?php

class PostOfficeType
{

    /**
     * @var number $number
     * @access public
     */
    public $number = null;

    /**
     * @var ZipType $Zip
     * @access public
     */
    public $Zip = null;

    /**
     * @var city $city
     * @access public
     */
    public $city = null;

    /**
     * @var CountryType $Origin
     * @access public
     */
    public $Origin = null;

    /**
     * @param number $number
     * @param ZipType $Zip
     * @param city $city
     * @param CountryType $Origin
     * @access public
     */
    public function __construct($number, $Zip, $city, $Origin)
    {
      $this->number = $number;
      $this->Zip = $Zip;
      $this->city = $city;
      $this->Origin = $Origin;
    }

}
