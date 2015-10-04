<?php

class GetManifestDDRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var string $manifestDate
     * @access public
     */
    public $manifestDate = null;

    /**
     * @var manifestDateRange $manifestDateRange
     * @access public
     */
    public $manifestDateRange = null;

    /**
     * @param Version $Version
     * @param string $manifestDate
     * @param manifestDateRange $manifestDateRange
     * @access public
     */
    public function __construct($Version, $manifestDate, $manifestDateRange)
    {
      $this->Version = $Version;
      $this->manifestDate = $manifestDate;
      $this->manifestDateRange = $manifestDateRange;
    }

}
