<?php

class Status
{

    /**
     * @var statuscode $statuscode
     * @access public
     */
    public $statuscode = null;

    /**
     * @var statusDescription $statusDescription
     * @access public
     */
    public $statusDescription = null;

    /**
     * @param statuscode $statuscode
     * @param statusDescription $statusDescription
     * @access public
     */
    public function __construct($statuscode, $statusDescription)
    {
      $this->statuscode = $statuscode;
      $this->statusDescription = $statusDescription;
    }

}
