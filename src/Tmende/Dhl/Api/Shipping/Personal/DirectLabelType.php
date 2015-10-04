<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class DirectLabelType
{

    /**
     * @var Base64LabelType $Base64Label
     * @access public
     */
    public $Base64Label = null;

    /**
     * @param Base64LabelType $Base64Label
     * @access public
     */
    public function __construct($Base64Label)
    {
      $this->Base64Label = $Base64Label;
    }

}
