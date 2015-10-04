<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class WsResponseStatus
{

    /**
     * @var int $status
     * @access public
     */
    public $status = null;

    /**
     * @var anonymous87 $errorMessage
     * @access public
     */
    public $errorMessage = null;

    /**
     * @param int $status
     * @param anonymous87 $errorMessage
     * @access public
     */
    public function __construct($status, $errorMessage)
    {
      $this->status = $status;
      $this->errorMessage = $errorMessage;
    }

}
