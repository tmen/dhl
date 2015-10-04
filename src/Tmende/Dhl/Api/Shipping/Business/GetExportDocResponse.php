<?php

class GetExportDocResponse
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
     * @var ExportDocData $ExportDocData
     * @access public
     */
    public $ExportDocData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param ExportDocData $ExportDocData
     * @access public
     */
    public function __construct($Version, $status, $ExportDocData)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->ExportDocData = $ExportDocData;
    }

}
