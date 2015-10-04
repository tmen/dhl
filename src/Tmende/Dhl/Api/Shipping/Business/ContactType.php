<?php

class ContactType
{

    /**
     * @var CommunicationType $Communication
     * @access public
     */
    public $Communication = null;

    /**
     * @var NativeAddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var NameType $Name
     * @access public
     */
    public $Name = null;

    /**
     * @param CommunicationType $Communication
     * @param NativeAddressType $Address
     * @param NameType $Name
     * @access public
     */
    public function __construct($Communication, $Address, $Name)
    {
      $this->Communication = $Communication;
      $this->Address = $Address;
      $this->Name = $Name;
    }

}
