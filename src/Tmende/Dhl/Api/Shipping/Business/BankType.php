<?php

class BankType
{

    /**
     * @var string $accountOwner
     * @access public
     */
    public $accountOwner = null;

    /**
     * @var string $accountNumber
     * @access public
     */
    public $accountNumber = null;

    /**
     * @var string $bankCode
     * @access public
     */
    public $bankCode = null;

    /**
     * @var string $bankName
     * @access public
     */
    public $bankName = null;

    /**
     * @var string $iban
     * @access public
     */
    public $iban = null;

    /**
     * @var note $note
     * @access public
     */
    public $note = null;

    /**
     * @var bic $bic
     * @access public
     */
    public $bic = null;

    /**
     * @param string $accountOwner
     * @param string $accountNumber
     * @param string $bankCode
     * @param string $bankName
     * @param string $iban
     * @param note $note
     * @param bic $bic
     * @access public
     */
    public function __construct($accountOwner, $accountNumber, $bankCode, $bankName, $iban, $note, $bic)
    {
      $this->accountOwner = $accountOwner;
      $this->accountNumber = $accountNumber;
      $this->bankCode = $bankCode;
      $this->bankName = $bankName;
      $this->iban = $iban;
      $this->note = $note;
      $this->bic = $bic;
    }

}
