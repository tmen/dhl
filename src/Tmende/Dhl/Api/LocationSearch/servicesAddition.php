<?php

class servicesAddition
{

    /**
     * @var string $serviceAddition
     * @access public
     */
    public $serviceAddition = null;

    /**
     * @param string $serviceAddition
     * @access public
     */
    public function __construct($serviceAddition)
    {
      $this->serviceAddition = $serviceAddition;
    }

}
