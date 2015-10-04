<?php

class inputTimeinfo
{

    /**
     * @var boolean $isOpenedToday
     * @access public
     */
    public $isOpenedToday = null;

    /**
     * @var string $weekday
     * @access public
     */
    public $weekday = null;

    /**
     * @var string $time
     * @access public
     */
    public $time = null;

    /**
     * @param boolean $isOpenedToday
     * @param string $weekday
     * @param string $time
     * @access public
     */
    public function __construct($isOpenedToday, $weekday, $time)
    {
      $this->isOpenedToday = $isOpenedToday;
      $this->weekday = $weekday;
      $this->time = $time;
    }

}
