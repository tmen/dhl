<?php

class DeleteShipmentResponse
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
     * @var DeletionState $DeletionState
     * @access public
     */
    public $DeletionState = null;

    /**
     * @param Version $Version
     * @param Statusinformation $Status
     * @param DeletionState $DeletionState
     * @access public
     */
    public function __construct($Version, $Status, $DeletionState)
    {
      $this->Version = $Version;
      $this->Status = $Status;
      $this->DeletionState = $DeletionState;
    }

}
