<?php

class IdentityCard
{

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var string $CardAuthority
     * @access public
     */
    public $CardAuthority = null;

    /**
     * @param string $CardNumber
     * @param string $CardAuthority
     * @access public
     */
    public function __construct($CardNumber, $CardAuthority)
    {
      $this->CardNumber = $CardNumber;
      $this->CardAuthority = $CardAuthority;
    }

}
