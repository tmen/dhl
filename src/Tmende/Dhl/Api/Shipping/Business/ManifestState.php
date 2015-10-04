<?php

class ManifestState
{

    /**
     * @var ShipmentNumberType $ShipmentNumber
     * @access public
     */
    public $ShipmentNumber = null;

    /**
     * @var Statusinformation $Status
     * @access public
     */
    public $Status = null;

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @param Statusinformation $Status
     * @access public
     */
    public function __construct($ShipmentNumber, $Status)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      $this->Status = $Status;
    }

}
