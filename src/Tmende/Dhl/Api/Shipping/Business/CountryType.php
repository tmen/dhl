<?php

class CountryType
{

    /**
     * @var country $country
     * @access public
     */
    public $country = null;

    /**
     * @var countryISOType $countryISOCode
     * @access public
     */
    public $countryISOCode = null;

    /**
     * @var state $state
     * @access public
     */
    public $state = null;

    /**
     * @param country $country
     * @param countryISOType $countryISOCode
     * @param state $state
     * @access public
     */
    public function __construct($country, $countryISOCode, $state)
    {
      $this->country = $country;
      $this->countryISOCode = $countryISOCode;
      $this->state = $state;
    }

}
