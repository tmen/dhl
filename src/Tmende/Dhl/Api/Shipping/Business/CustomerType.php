<?php

class CustomerType
{

    /**
     * @var NameType $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $vatID
     * @access public
     */
    public $vatID = null;

    /**
     * @var EKP $EKP
     * @access public
     */
    public $EKP = null;

    /**
     * @var NativeAddressType $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var ContactType $Contact
     * @access public
     */
    public $Contact = null;

    /**
     * @var BankType $Bank
     * @access public
     */
    public $Bank = null;

    /**
     * @var anyType $note
     * @access public
     */
    public $note = null;

    /**
     * @param NameType $Name
     * @param string $vatID
     * @param EKP $EKP
     * @param NativeAddressType $Address
     * @param ContactType $Contact
     * @param BankType $Bank
     * @param anyType $note
     * @access public
     */
    public function __construct($Name, $vatID, $EKP, $Address, $Contact, $Bank, $note)
    {
      $this->Name = $Name;
      $this->vatID = $vatID;
      $this->EKP = $EKP;
      $this->Address = $Address;
      $this->Contact = $Contact;
      $this->Bank = $Bank;
      $this->note = $note;
    }

}
