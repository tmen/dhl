<?php

class GetLabelResponse
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
     * @var LabelData $LabelData
     * @access public
     */
    public $LabelData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param LabelData $LabelData
     * @access public
     */
    public function __construct($Version, $status, $LabelData)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->LabelData = $LabelData;
    }

}
