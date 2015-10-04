<?php

class TimeFrame
{

    /**
     * @var time $from
     * @access public
     */
    public $from = null;

    /**
     * @var time $until
     * @access public
     */
    public $until = null;

    /**
     * @param time $from
     * @param time $until
     * @access public
     */
    public function __construct($from, $until)
    {
      $this->from = $from;
      $this->until = $until;
    }

}
