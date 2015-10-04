<?php

class ExportDocumentDDType
{

    /**
     * @var InvoiceType $InvoiceType
     * @access public
     */
    public $InvoiceType = null;

    /**
     * @var InvoiceDate $InvoiceDate
     * @access public
     */
    public $InvoiceDate = null;

    /**
     * @var string $InvoiceNumber
     * @access public
     */
    public $InvoiceNumber = null;

    /**
     * @var ExportType $ExportType
     * @access public
     */
    public $ExportType = null;

    /**
     * @var string $ExportTypeDescription
     * @access public
     */
    public $ExportTypeDescription = null;

    /**
     * @var string $CommodityCode
     * @access public
     */
    public $CommodityCode = null;

    /**
     * @var string $TermsOfTrade
     * @access public
     */
    public $TermsOfTrade = null;

    /**
     * @var Amount $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $CountryCodeOrigin
     * @access public
     */
    public $CountryCodeOrigin = null;

    /**
     * @var AdditionalFee $AdditionalFee
     * @access public
     */
    public $AdditionalFee = null;

    /**
     * @var CustomsValue $CustomsValue
     * @access public
     */
    public $CustomsValue = null;

    /**
     * @var string $CustomsCurrency
     * @access public
     */
    public $CustomsCurrency = null;

    /**
     * @var string $PermitNumber
     * @access public
     */
    public $PermitNumber = null;

    /**
     * @var string $AttestationNumber
     * @access public
     */
    public $AttestationNumber = null;

    /**
     * @var boolean $WithElectronicExportNtfctn
     * @access public
     */
    public $WithElectronicExportNtfctn = null;

    /**
     * @var string $MRNNumber
     * @access public
     */
    public $MRNNumber = null;

    /**
     * @var ExportDocPosition $ExportDocPosition
     * @access public
     */
    public $ExportDocPosition = null;

    /**
     * @param InvoiceType $InvoiceType
     * @param InvoiceDate $InvoiceDate
     * @param string $InvoiceNumber
     * @param ExportType $ExportType
     * @param string $ExportTypeDescription
     * @param string $CommodityCode
     * @param string $TermsOfTrade
     * @param Amount $Amount
     * @param string $Description
     * @param string $CountryCodeOrigin
     * @param AdditionalFee $AdditionalFee
     * @param CustomsValue $CustomsValue
     * @param string $CustomsCurrency
     * @param string $PermitNumber
     * @param string $AttestationNumber
     * @param boolean $WithElectronicExportNtfctn
     * @param string $MRNNumber
     * @param ExportDocPosition $ExportDocPosition
     * @access public
     */
    public function __construct($InvoiceType, $InvoiceDate, $InvoiceNumber, $ExportType, $ExportTypeDescription, $CommodityCode, $TermsOfTrade, $Amount, $Description, $CountryCodeOrigin, $AdditionalFee, $CustomsValue, $CustomsCurrency, $PermitNumber, $AttestationNumber, $WithElectronicExportNtfctn, $MRNNumber, $ExportDocPosition)
    {
      $this->InvoiceType = $InvoiceType;
      $this->InvoiceDate = $InvoiceDate;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->ExportType = $ExportType;
      $this->ExportTypeDescription = $ExportTypeDescription;
      $this->CommodityCode = $CommodityCode;
      $this->TermsOfTrade = $TermsOfTrade;
      $this->Amount = $Amount;
      $this->Description = $Description;
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      $this->AdditionalFee = $AdditionalFee;
      $this->CustomsValue = $CustomsValue;
      $this->CustomsCurrency = $CustomsCurrency;
      $this->PermitNumber = $PermitNumber;
      $this->AttestationNumber = $AttestationNumber;
      $this->WithElectronicExportNtfctn = $WithElectronicExportNtfctn;
      $this->MRNNumber = $MRNNumber;
      $this->ExportDocPosition = $ExportDocPosition;
    }

}
