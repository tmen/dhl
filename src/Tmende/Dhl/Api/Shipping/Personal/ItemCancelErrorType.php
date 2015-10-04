<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemCancelErrorType
{

    /**
     * @var string $Message
     * @access public
     */
    public $Message = null;

    /**
     * @var int $position
     * @access public
     */
    public $position = null;

    /**
     * @param string $Message
     * @param int $position
     * @access public
     */
    public function __construct($Message, $position)
    {
      $this->Message = $Message;
      $this->position = $position;
    }

}
