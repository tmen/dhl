<?php

class IdentityData
{

    /**
     * @var DrivingLicense $DrivingLicense
     * @access public
     */
    public $DrivingLicense = null;

    /**
     * @var IdentityCard $IdentityCard
     * @access public
     */
    public $IdentityCard = null;

    /**
     * @var BankCard $BankCard
     * @access public
     */
    public $BankCard = null;

    /**
     * @param DrivingLicense $DrivingLicense
     * @param IdentityCard $IdentityCard
     * @param BankCard $BankCard
     * @access public
     */
    public function __construct($DrivingLicense, $IdentityCard, $BankCard)
    {
      $this->DrivingLicense = $DrivingLicense;
      $this->IdentityCard = $IdentityCard;
      $this->BankCard = $BankCard;
    }

}
