<?php

class Insurance
{

    /**
     * @var InsuranceAmount $InsuranceAmount
     * @access public
     */
    public $InsuranceAmount = null;

    /**
     * @var InsuranceCurrency $InsuranceCurrency
     * @access public
     */
    public $InsuranceCurrency = null;

    /**
     * @param InsuranceAmount $InsuranceAmount
     * @param InsuranceCurrency $InsuranceCurrency
     * @access public
     */
    public function __construct($InsuranceAmount, $InsuranceCurrency)
    {
      $this->InsuranceAmount = $InsuranceAmount;
      $this->InsuranceCurrency = $InsuranceCurrency;
    }

}
