<?php

class DeliveryOnTime
{

    /**
     * @var string $time
     * @access public
     */
    public $time = null;

    /**
     * @param string $time
     * @access public
     */
    public function __construct($time)
    {
      $this->time = $time;
    }

}
