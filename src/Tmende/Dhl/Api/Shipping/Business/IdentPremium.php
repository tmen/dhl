<?php

class IdentPremium
{

    /**
     * @var string $Firstname
     * @access public
     */
    public $Firstname = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $IdentityCardType
     * @access public
     */
    public $IdentityCardType = null;

    /**
     * @var string $IdentityCardNumber
     * @access public
     */
    public $IdentityCardNumber = null;

    /**
     * @var string $MinimumAge
     * @access public
     */
    public $MinimumAge = null;

    /**
     * @var DateOfBirth $DateOfBirth
     * @access public
     */
    public $DateOfBirth = null;

    /**
     * @var string $StreetAndHouseNumber
     * @access public
     */
    public $StreetAndHouseNumber = null;

    /**
     * @var string $PostcodeAndCity
     * @access public
     */
    public $PostcodeAndCity = null;

    /**
     * @var string $District
     * @access public
     */
    public $District = null;

    /**
     * @var boolean $WithIDPContract
     * @access public
     */
    public $WithIDPContract = null;

    /**
     * @var string $ContractID
     * @access public
     */
    public $ContractID = null;

    /**
     * @var string $Nationality
     * @access public
     */
    public $Nationality = null;

    /**
     * @var string $FreeText1
     * @access public
     */
    public $FreeText1 = null;

    /**
     * @var string $FreeText2
     * @access public
     */
    public $FreeText2 = null;

    /**
     * @var boolean $CorrOfNameAllowed
     * @access public
     */
    public $CorrOfNameAllowed = null;

    /**
     * @var boolean $CorrOfFirstNameAllowed
     * @access public
     */
    public $CorrOfFirstNameAllowed = null;

    /**
     * @var boolean $CorrOfDayOfBirthAllowed
     * @access public
     */
    public $CorrOfDayOfBirthAllowed = null;

    /**
     * @var boolean $CorrOfMinimumAgeAllowed
     * @access public
     */
    public $CorrOfMinimumAgeAllowed = null;

    /**
     * @var boolean $CorrOfIdentityCardTypeAllowed
     * @access public
     */
    public $CorrOfIdentityCardTypeAllowed = null;

    /**
     * @var boolean $CorrOfIdentityCardNumberAllowed
     * @access public
     */
    public $CorrOfIdentityCardNumberAllowed = null;

    /**
     * @var boolean $CorrOfAddressAllowed
     * @access public
     */
    public $CorrOfAddressAllowed = null;

    /**
     * @var boolean $CorrOfContractAllowed
     * @access public
     */
    public $CorrOfContractAllowed = null;

    /**
     * @var boolean $CorrOfContractIdAllowed
     * @access public
     */
    public $CorrOfContractIdAllowed = null;

    /**
     * @var boolean $CorrOfNationalityAllowed
     * @access public
     */
    public $CorrOfNationalityAllowed = null;

    /**
     * @var boolean $CorrOfFreetextsAllowed
     * @access public
     */
    public $CorrOfFreetextsAllowed = null;

    /**
     * @param string $Firstname
     * @param string $Name
     * @param string $IdentityCardType
     * @param string $IdentityCardNumber
     * @param string $MinimumAge
     * @param DateOfBirth $DateOfBirth
     * @param string $StreetAndHouseNumber
     * @param string $PostcodeAndCity
     * @param string $District
     * @param boolean $WithIDPContract
     * @param string $ContractID
     * @param string $Nationality
     * @param string $FreeText1
     * @param string $FreeText2
     * @param boolean $CorrOfNameAllowed
     * @param boolean $CorrOfFirstNameAllowed
     * @param boolean $CorrOfDayOfBirthAllowed
     * @param boolean $CorrOfMinimumAgeAllowed
     * @param boolean $CorrOfIdentityCardTypeAllowed
     * @param boolean $CorrOfIdentityCardNumberAllowed
     * @param boolean $CorrOfAddressAllowed
     * @param boolean $CorrOfContractAllowed
     * @param boolean $CorrOfContractIdAllowed
     * @param boolean $CorrOfNationalityAllowed
     * @param boolean $CorrOfFreetextsAllowed
     * @access public
     */
    public function __construct($Firstname, $Name, $IdentityCardType, $IdentityCardNumber, $MinimumAge, $DateOfBirth, $StreetAndHouseNumber, $PostcodeAndCity, $District, $WithIDPContract, $ContractID, $Nationality, $FreeText1, $FreeText2, $CorrOfNameAllowed, $CorrOfFirstNameAllowed, $CorrOfDayOfBirthAllowed, $CorrOfMinimumAgeAllowed, $CorrOfIdentityCardTypeAllowed, $CorrOfIdentityCardNumberAllowed, $CorrOfAddressAllowed, $CorrOfContractAllowed, $CorrOfContractIdAllowed, $CorrOfNationalityAllowed, $CorrOfFreetextsAllowed)
    {
      $this->Firstname = $Firstname;
      $this->Name = $Name;
      $this->IdentityCardType = $IdentityCardType;
      $this->IdentityCardNumber = $IdentityCardNumber;
      $this->MinimumAge = $MinimumAge;
      $this->DateOfBirth = $DateOfBirth;
      $this->StreetAndHouseNumber = $StreetAndHouseNumber;
      $this->PostcodeAndCity = $PostcodeAndCity;
      $this->District = $District;
      $this->WithIDPContract = $WithIDPContract;
      $this->ContractID = $ContractID;
      $this->Nationality = $Nationality;
      $this->FreeText1 = $FreeText1;
      $this->FreeText2 = $FreeText2;
      $this->CorrOfNameAllowed = $CorrOfNameAllowed;
      $this->CorrOfFirstNameAllowed = $CorrOfFirstNameAllowed;
      $this->CorrOfDayOfBirthAllowed = $CorrOfDayOfBirthAllowed;
      $this->CorrOfMinimumAgeAllowed = $CorrOfMinimumAgeAllowed;
      $this->CorrOfIdentityCardTypeAllowed = $CorrOfIdentityCardTypeAllowed;
      $this->CorrOfIdentityCardNumberAllowed = $CorrOfIdentityCardNumberAllowed;
      $this->CorrOfAddressAllowed = $CorrOfAddressAllowed;
      $this->CorrOfContractAllowed = $CorrOfContractAllowed;
      $this->CorrOfContractIdAllowed = $CorrOfContractIdAllowed;
      $this->CorrOfNationalityAllowed = $CorrOfNationalityAllowed;
      $this->CorrOfFreetextsAllowed = $CorrOfFreetextsAllowed;
    }

}
