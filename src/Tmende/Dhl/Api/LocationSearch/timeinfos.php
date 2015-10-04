<?php

class timeinfos
{

    /**
     * @var timeinfo $timeinfo
     * @access public
     */
    public $timeinfo = null;

    /**
     * @param timeinfo $timeinfo
     * @access public
     */
    public function __construct($timeinfo)
    {
      $this->timeinfo = $timeinfo;
    }

}
