<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class DirectLabelInfoType
{

    /**
     * @var anonymous91 $format
     * @access public
     */
    public $format = null;

    /**
     * @param anonymous91 $format
     * @access public
     */
    public function __construct($format)
    {
      $this->format = $format;
    }

}
