<?php

class IdentityType
{

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $Street
     * @access public
     */
    public $Street = null;

    /**
     * @var string $HouseNumber
     * @access public
     */
    public $HouseNumber = null;

    /**
     * @var string $Postcode
     * @access public
     */
    public $Postcode = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $DateOfBirth
     * @access public
     */
    public $DateOfBirth = null;

    /**
     * @var string $Nationality
     * @access public
     */
    public $Nationality = null;

    /**
     * @param string $FirstName
     * @param string $LastName
     * @param string $Street
     * @param string $HouseNumber
     * @param string $Postcode
     * @param string $City
     * @param string $DateOfBirth
     * @param string $Nationality
     * @access public
     */
    public function __construct($FirstName, $LastName, $Street, $HouseNumber, $Postcode, $City, $DateOfBirth, $Nationality)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->Street = $Street;
      $this->HouseNumber = $HouseNumber;
      $this->Postcode = $Postcode;
      $this->City = $City;
      $this->DateOfBirth = $DateOfBirth;
      $this->Nationality = $Nationality;
    }

}
