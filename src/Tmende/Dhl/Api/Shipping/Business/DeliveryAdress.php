<?php

class DeliveryAdress
{

    /**
     * @var NameType $Company
     * @access public
     */
    public $Company = null;

    /**
     * @var string $Name3
     * @access public
     */
    public $Name3 = null;

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
     * @param NameType $Company
     * @param string $Name3
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @access public
     */
    public function __construct($Company, $Name3, $Address, $Communication)
    {
      $this->Company = $Company;
      $this->Name3 = $Name3;
      $this->Address = $Address;
      $this->Communication = $Communication;
    }

}
