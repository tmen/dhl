<?php

class UpdateShipmentDDRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var ShipmentNumberType $ShipmentNumber
     * @access public
     */
    public $ShipmentNumber = null;

    /**
     * @var ShipmentOrderDDType $ShipmentOrder
     * @access public
     */
    public $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentNumberType $ShipmentNumber
     * @param ShipmentOrderDDType $ShipmentOrder
     * @access public
     */
    public function __construct($Version, $ShipmentNumber, $ShipmentOrder)
    {
      $this->Version = $Version;
      $this->ShipmentNumber = $ShipmentNumber;
      $this->ShipmentOrder = $ShipmentOrder;
    }

}
