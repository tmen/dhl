<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class BaseLabelAddressType
{

    /**
     * @var anonymous20 $name1
     * @access public
     */
    public $name1 = null;

    /**
     * @var anonymous21 $name2
     * @access public
     */
    public $name2 = null;

    /**
     * @var anonymous22 $street
     * @access public
     */
    public $street = null;

    /**
     * @var anonymous23 $houseNumber
     * @access public
     */
    public $houseNumber = null;

    /**
     * @var anonymous24 $postalCode
     * @access public
     */
    public $postalCode = null;

    /**
     * @var anonymous25 $city
     * @access public
     */
    public $city = null;

    /**
     * @var CountryCodeType $countryCode
     * @access public
     */
    public $countryCode = null;

    /**
     * @var EmailType $email
     * @access public
     */
    public $email = null;

    /**
     * @var PhoneNumberType $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @var PhoneNumberType $smsNumber
     * @access public
     */
    public $smsNumber = null;

    /**
     * @param anonymous20 $name1
     * @param anonymous21 $name2
     * @param anonymous22 $street
     * @param anonymous23 $houseNumber
     * @param anonymous24 $postalCode
     * @param anonymous25 $city
     * @param CountryCodeType $countryCode
     * @param EmailType $email
     * @param PhoneNumberType $phoneNumber
     * @param PhoneNumberType $smsNumber
     * @access public
     */
    public function __construct($name1, $name2, $street, $houseNumber, $postalCode, $city, $countryCode, $email, $phoneNumber, $smsNumber)
    {
      $this->name1 = $name1;
      $this->name2 = $name2;
      $this->street = $street;
      $this->houseNumber = $houseNumber;
      $this->postalCode = $postalCode;
      $this->city = $city;
      $this->countryCode = $countryCode;
      $this->email = $email;
      $this->phoneNumber = $phoneNumber;
      $this->smsNumber = $smsNumber;
    }

}
