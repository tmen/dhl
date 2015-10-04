<?php

class PickupAddressType
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
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @access public
     */
    public function __construct($Company, $Address, $Communication)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Communication = $Communication;
    }

}
