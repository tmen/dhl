<?php

class Unfree
{

    /**
     * @var PaymentType $PaymentType
     * @access public
     */
    public $PaymentType = null;

    /**
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @param PaymentType $PaymentType
     * @param string $CustomerNumber
     * @access public
     */
    public function __construct($PaymentType, $CustomerNumber)
    {
      $this->PaymentType = $PaymentType;
      $this->CustomerNumber = $CustomerNumber;
    }

}
