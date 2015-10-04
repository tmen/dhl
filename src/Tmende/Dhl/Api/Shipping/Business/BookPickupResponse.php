<?php

class BookPickupResponse
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var Statusinformation $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $ConfirmationNumber
     * @access public
     */
    public $ConfirmationNumber = null;

    /**
     * @var string $ShipmentNumber
     * @access public
     */
    public $ShipmentNumber = null;

    /**
     * @param Version $Version
     * @param Statusinformation $Status
     * @param string $ConfirmationNumber
     * @param string $ShipmentNumber
     * @access public
     */
    public function __construct($Version, $Status, $ConfirmationNumber, $ShipmentNumber)
    {
      $this->Version = $Version;
      $this->Status = $Status;
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->ShipmentNumber = $ShipmentNumber;
    }

}
