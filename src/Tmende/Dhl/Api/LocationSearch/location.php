<?php

class location
{

    /**
     * @var float $latitude
     * @access public
     */
    public $latitude = null;

    /**
     * @var float $longitude
     * @access public
     */
    public $longitude = null;

    /**
     * @var string $countryCode
     * @access public
     */
    public $countryCode = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param string $countryCode
     * @access public
     */
    public function __construct($latitude, $longitude, $countryCode)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->countryCode = $countryCode;
    }

}
