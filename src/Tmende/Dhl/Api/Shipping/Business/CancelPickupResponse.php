<?php

class CancelPickupResponse
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
     * @param Version $Version
     * @param Statusinformation $Status
     * @access public
     */
    public function __construct($Version, $Status)
    {
      $this->Version = $Version;
      $this->Status = $Status;
    }

}
