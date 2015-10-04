<?php

include_once('ReceiverType.php');

class ReceiverDDType extends ReceiverType
{

    /**
     * @var string $CompanyName3
     * @access public
     */
    public $CompanyName3 = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param PackstationType $Packstation
     * @param PostfilialeType $Postfiliale
     * @param CommunicationType $Communication
     * @param string $VAT
     * @param string $CompanyName3
     * @access public
     */
    public function __construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT, $CompanyName3)
    {
      parent::__construct($Company, $Address, $Packstation, $Postfiliale, $Communication, $VAT);
      $this->CompanyName3 = $CompanyName3;
    }

}
