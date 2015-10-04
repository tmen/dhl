<?php

class CreateShipmentResponse
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var Statusinformation $status
     * @access public
     */
    public $status = null;

    /**
     * @var CreationState $CreationState
     * @access public
     */
    public $CreationState = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param CreationState $CreationState
     * @access public
     */
    public function __construct($Version, $status, $CreationState)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->CreationState = $CreationState;
    }

}
