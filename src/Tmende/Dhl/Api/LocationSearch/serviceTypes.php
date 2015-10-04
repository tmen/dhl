<?php

class serviceTypes
{

    /**
     * @var int $serviceType
     * @access public
     */
    public $serviceType = null;

    /**
     * @param int $serviceType
     * @access public
     */
    public function __construct($serviceType)
    {
      $this->serviceType = $serviceType;
    }

}
