<?php

class NativeAddressType
{

    /**
     * @var streetName $streetName
     * @access public
     */
    public $streetName = null;

    /**
     * @var streetNumber $streetNumber
     * @access public
     */
    public $streetNumber = null;

    /**
     * @var careOfName $careOfName
     * @access public
     */
    public $careOfName = null;

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
     * @var district $district
     * @access public
     */
    public $district = null;

    /**
     * @var CountryType $Origin
     * @access public
     */
    public $Origin = null;

    /**
     * @var floorNumber $floorNumber
     * @access public
     */
    public $floorNumber = null;

    /**
     * @var roomNumber $roomNumber
     * @access public
     */
    public $roomNumber = null;

    /**
     * @var countryISOType $languageCodeISO
     * @access public
     */
    public $languageCodeISO = null;

    /**
     * @var note $note
     * @access public
     */
    public $note = null;

    /**
     * @param streetName $streetName
     * @param streetNumber $streetNumber
     * @param careOfName $careOfName
     * @param ZipType $Zip
     * @param city $city
     * @param district $district
     * @param CountryType $Origin
     * @param floorNumber $floorNumber
     * @param roomNumber $roomNumber
     * @param countryISOType $languageCodeISO
     * @param note $note
     * @access public
     */
    public function __construct($streetName, $streetNumber, $careOfName, $Zip, $city, $district, $Origin, $floorNumber, $roomNumber, $languageCodeISO, $note)
    {
      $this->streetName = $streetName;
      $this->streetNumber = $streetNumber;
      $this->careOfName = $careOfName;
      $this->Zip = $Zip;
      $this->city = $city;
      $this->district = $district;
      $this->Origin = $Origin;
      $this->floorNumber = $floorNumber;
      $this->roomNumber = $roomNumber;
      $this->languageCodeISO = $languageCodeISO;
      $this->note = $note;
    }

}
