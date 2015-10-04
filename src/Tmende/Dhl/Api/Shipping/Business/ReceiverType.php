<?php

class ReceiverType
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
     * @var PackstationType $Packstation
     * @access public
     */
    public $Packstation = null;

    /**
     * @var PostfilialeType $Postfiliale
     * @access public
     */
    public $Postfiliale = null;

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
     * @param PackstationType $Packstation
     * @param PostfilialeType $Postfiliale
     * @param CommunicationType $Communication
     * @param string $VAT
     * @access public
     */
    public function __construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT)
    {
      $this->Company = $Company;
      $this->Address = $Address;
      $this->Packstation = $Packstation;
      $this->Postfiliale = $Postfiliale;
      $this->Communication = $Communication;
      $this->VAT = $VAT;
    }

}
