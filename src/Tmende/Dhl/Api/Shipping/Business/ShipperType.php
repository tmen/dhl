<?php

class ShipperType
{

    /**
     * @var NameType $Company
     * @access public
     */
    public $Company = null;

    /**
     * @var NativeAddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var CommunicationType $Communication
     * @access public
     */
    public $Communication = null;

    /**
     * @var string $VAT
     * @access public
     */
    public $VAT = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     * @access public
     */
    public function __construct($Company, $Address, $Communication, $VAT)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Communication = $Communication;
      $this->VAT = $VAT;
    }

}
