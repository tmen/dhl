<?php

class GetManifestDDResponse
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
     * @var string $ManifestPDFData
     * @access public
     */
    public $ManifestPDFData = null;

    /**
     * @param Version $Version
     * @param Statusinformation $status
     * @param string $ManifestPDFData
     * @access public
     */
    public function __construct($Version, $status, $ManifestPDFData)
    {
      $this->Version = $Version;
      $this->status = $status;
      $this->ManifestPDFData = $ManifestPDFData;
    }

}
