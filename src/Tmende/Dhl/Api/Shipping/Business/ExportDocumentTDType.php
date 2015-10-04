<?php

class ExportDocumentTDType
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
     * @var string $SignerTitle
     * @access public
     */
    public $SignerTitle = null;

    /**
     * @var string $Remark
     * @access public
     */
    public $Remark = null;

    /**
     * @var string $CommodityCode
     * @access public
     */
    public $CommodityCode = null;

    /**
     * @var string $ExportReason
     * @access public
     */
    public $ExportReason = null;

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
     * @param string $SignerTitle
     * @param string $Remark
     * @param string $CommodityCode
     * @param string $ExportReason
     * @param ExportDocPosition $ExportDocPosition
     * @access public
     */
    public function __construct($InvoiceType, $InvoiceDate, $InvoiceNumber, $ExportType, $SignerTitle, $Remark, $CommodityCode, $ExportReason, $ExportDocPosition)
    {
      $this->InvoiceType = $InvoiceType;
      $this->InvoiceDate = $InvoiceDate;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->ExportType = $ExportType;
      $this->SignerTitle = $SignerTitle;
      $this->Remark = $Remark;
      $this->CommodityCode = $CommodityCode;
      $this->ExportReason = $ExportReason;
      $this->ExportDocPosition = $ExportDocPosition;
    }

}
