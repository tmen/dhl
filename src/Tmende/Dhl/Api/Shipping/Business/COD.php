<?php

class COD
{

    /**
     * @var CODAmount $CODAmount
     * @access public
     */
    public $CODAmount = null;

    /**
     * @var string $CODCurrency
     * @access public
     */
    public $CODCurrency = null;

    /**
     * @param CODAmount $CODAmount
     * @param string $CODCurrency
     * @access public
     */
    public function __construct($CODAmount, $CODCurrency)
    {
      $this->CODAmount = $CODAmount;
      $this->CODCurrency = $CODCurrency;
    }

}
