<?php

class TDServiceGroupDateTimeOptionType
{

    /**
     * @var ExpressSaturday $ExpressSaturday
     * @access public
     */
    public $ExpressSaturday = null;

    /**
     * @param ExpressSaturday $ExpressSaturday
     * @access public
     */
    public function __construct($ExpressSaturday)
    {
      $this->ExpressSaturday = $ExpressSaturday;
    }

}
