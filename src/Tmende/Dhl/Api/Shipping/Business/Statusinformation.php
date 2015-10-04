<?php

class Statusinformation
{

    /**
     * @var int $StatusCode
     * @access public
     */
    public $StatusCode = null;

    /**
     * @var string $StatusMessage
     * @access public
     */
    public $StatusMessage = null;

    /**
     * @param int $StatusCode
     * @param string $StatusMessage
     * @access public
     */
    public function __construct($StatusCode, $StatusMessage)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
    }

}
