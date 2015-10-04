<?php

class TDServiceGroupOtherType
{

    /**
     * @var Insurance $Insurance
     * @access public
     */
    public $Insurance = null;

    /**
     * @var boolean $GoGreen
     * @access public
     */
    public $GoGreen = null;

    /**
     * @param Insurance $Insurance
     * @param boolean $GoGreen
     * @access public
     */
    public function __construct($Insurance, $GoGreen)
    {
      $this->Insurance = $Insurance;
      $this->GoGreen = $GoGreen;
    }

}
