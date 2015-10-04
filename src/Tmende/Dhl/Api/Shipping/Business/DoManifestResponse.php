<?php

class DoManifestResponse
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
     * @var ManifestState $ManifestState
     * @access public
     */
    public $ManifestState = null;

    /**
     * @param Version $Version
     * @param Statusinformation $Status
     * @param ManifestState $ManifestState
     * @access public
     */
    public function __construct($Version, $Status, $ManifestState)
    {
      $this->Version = $Version;
      $this->Status = $Status;
      $this->ManifestState = $ManifestState;
    }

}
