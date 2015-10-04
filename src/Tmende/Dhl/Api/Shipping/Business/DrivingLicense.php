<?php

class DrivingLicense
{

    /**
     * @var string $LicenseNumber
     * @access public
     */
    public $LicenseNumber = null;

    /**
     * @var string $Authority
     * @access public
     */
    public $Authority = null;

    /**
     * @param string $LicenseNumber
     * @param string $Authority
     * @access public
     */
    public function __construct($LicenseNumber, $Authority)
    {
      $this->LicenseNumber = $LicenseNumber;
      $this->Authority = $Authority;
    }

}
