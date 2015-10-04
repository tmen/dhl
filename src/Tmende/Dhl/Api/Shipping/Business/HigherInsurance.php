<?php

class HigherInsurance
{

    /**
     * @var InsuranceAmount $InsuranceAmount
     * @access public
     */
    public $InsuranceAmount = null;

    /**
     * @var string $InsuranceCurrency
     * @access public
     */
    public $InsuranceCurrency = null;

    /**
     * @param InsuranceAmount $InsuranceAmount
     * @param string $InsuranceCurrency
     * @access public
     */
    public function __construct($InsuranceAmount, $InsuranceCurrency)
    {
      $this->InsuranceAmount = $InsuranceAmount;
      $this->InsuranceCurrency = $InsuranceCurrency;
    }

}
