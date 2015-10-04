<?php

class BankCard
{

    /**
     * @var string $CardType
     * @access public
     */
    public $CardType = null;

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var string $BankName
     * @access public
     */
    public $BankName = null;

    /**
     * @var string $BankCode
     * @access public
     */
    public $BankCode = null;

    /**
     * @param string $CardType
     * @param string $CardNumber
     * @param string $BankName
     * @param string $BankCode
     * @access public
     */
    public function __construct($CardType, $CardNumber, $BankName, $BankCode)
    {
      $this->CardType = $CardType;
      $this->CardNumber = $CardNumber;
      $this->BankName = $BankName;
      $this->BankCode = $BankCode;
    }

}
