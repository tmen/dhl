<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class Base64LabelType
{

    /**
     * @var string $Base64Data
     * @access public
     */
    public $Base64Data = null;

    /**
     * @param string $Base64Data
     * @access public
     */
    public function __construct($Base64Data)
    {
      $this->Base64Data = $Base64Data;
    }

}
