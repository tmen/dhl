<?php

class CheckMinimumAge
{

    /**
     * @var string $MinimumAge
     * @access public
     */
    public $MinimumAge = null;

    /**
     * @param string $MinimumAge
     * @access public
     */
    public function __construct($MinimumAge)
    {
      $this->MinimumAge = $MinimumAge;
    }

}
