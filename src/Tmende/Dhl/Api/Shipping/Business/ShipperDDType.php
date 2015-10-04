<?php

include_once('ShipperType.php');

class ShipperDDType extends ShipperType
{

    /**
     * @var string $Remark
     * @access public
     */
    public $Remark = null;

    /**
     * @param NameType $Company
     * @param NativeAddressType $Address
     * @param CommunicationType $Communication
     * @param string $VAT
     * @param string $Remark
     * @access public
     */
    public function __construct($Company, $Address, $Communication, $VAT, $Remark)
    {
      parent::__construct($Company, $Address, $Communication, $VAT);
      $this->Remark = $Remark;
    }

}
