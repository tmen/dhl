<?php

class GetVersionResponse
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @param Version $Version
     * @access public
     */
    public function __construct($Version)
    {
      $this->Version = $Version;
    }

}
