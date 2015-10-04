<?php

class DeleteShipmentTDRequest
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
     * @param Version $Version
     * @param ShipmentNumberType $ShipmentNumber
     * @access public
     */
    public function __construct($Version, $ShipmentNumber)
    {
      $this->Version = $Version;
      $this->ShipmentNumber = $ShipmentNumber;
    }

}
