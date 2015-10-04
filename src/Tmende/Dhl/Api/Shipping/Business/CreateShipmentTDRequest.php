<?php

class CreateShipmentTDRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var ShipmentOrderTDType $ShipmentOrder
     * @access public
     */
    public $ShipmentOrder = null;

    /**
     * @param Version $Version
     * @param ShipmentOrderTDType $ShipmentOrder
     * @access public
     */
    public function __construct($Version, $ShipmentOrder)
    {
      $this->Version = $Version;
      $this->ShipmentOrder = $ShipmentOrder;
    }

}
