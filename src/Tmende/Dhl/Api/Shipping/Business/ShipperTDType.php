<?php

include_once('ShipperType.php');

class ShipperTDType extends ShipperType
{

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     * @access public
     */
    public function __construct($Company, $Address, $Communication, $VAT)
    {
      parent::__construct($Company, $Address, $Communication, $VAT);
    }

}
