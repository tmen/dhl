<?php

class IdentExtra
{

    /**
     * @var IdentityData $Group1
     * @access public
     */
    public $Group1 = null;

    /**
     * @var IdentityData $Group2
     * @access public
     */
    public $Group2 = null;

    /**
     * @param IdentityData $Group1
     * @param IdentityData $Group2
     * @access public
     */
    public function __construct($Group1, $Group2)
    {
      $this->Group1 = $Group1;
      $this->Group2 = $Group2;
    }

}
