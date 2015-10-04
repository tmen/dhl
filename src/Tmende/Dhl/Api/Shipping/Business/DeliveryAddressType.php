<?php

class DeliveryAddressType
{

    /**
     * @var NativeAddressType $NativeAddress
     * @access public
     */
    public $NativeAddress = null;

    /**
     * @var PostOfficeType $PostOffice
     * @access public
     */
    public $PostOffice = null;

    /**
     * @var PackStationType $PackStation
     * @access public
     */
    public $PackStation = null;

    /**
     * @var streetNameCode $streetNameCode
     * @access public
     */
    public $streetNameCode = null;

    /**
     * @var streetNumberCode $streetNumberCode
     * @access public
     */
    public $streetNumberCode = null;

    /**
     * @param NativeAddressType $NativeAddress
     * @param PostOfficeType $PostOffice
     * @param PackStationType $PackStation
     * @param streetNameCode $streetNameCode
     * @param streetNumberCode $streetNumberCode
     * @access public
     */
    public function __construct($NativeAddress, $PostOffice, $PackStation, $streetNameCode, $streetNumberCode)
    {
      $this->NativeAddress = $NativeAddress;
      $this->PostOffice = $PostOffice;
      $this->PackStation = $PackStation;
      $this->streetNameCode = $streetNameCode;
      $this->streetNumberCode = $streetNumberCode;
    }

}
