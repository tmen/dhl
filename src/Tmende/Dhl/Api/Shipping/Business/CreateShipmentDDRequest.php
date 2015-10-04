<?php

class CreateShipmentDDRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var ShipmentOrderDDType $ShipmentOrder
     * @access public
     */
    public $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentOrderDDType $ShipmentOrder
     * @access public
     */
    public function __construct($Version, $ShipmentOrder)
    {
      $this->Version = $Version;
      $this->ShipmentOrder = $ShipmentOrder;
    }

}
