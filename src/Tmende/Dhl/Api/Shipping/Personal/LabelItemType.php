<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShipmentItemType;

class LabelItemType extends ShipmentItemType
{

    /**
     * @var Cn22Type $CnDeclaration
     * @access public
     */
    public $CnDeclaration = null;

    /**
     * @var DirectLabelType $DirectLabel
     * @access public
     */
    public $DirectLabel = null;

    /**
     * @var dateTime $printedAt
     * @access public
     */
    public $printedAt = null;

    /**
     * @var string $labelId
     * @access public
     */
    public $labelId = null;

    /**
     * @var string $pdfDownloadUrl
     * @access public
     */
    public $pdfDownloadUrl = null;

    /**
     * @var PreAdviceType $preAdviceType
     * @access public
     */
    public $preAdviceType = null;

    /**
     * @var RecomandCodeType $recomandCode
     * @access public
     */
    public $recomandCode = null;

    /**
     * @var string $awtDownloadUrl
     * @access public
     */
    public $awtDownloadUrl = null;

    /**
     * @param ItemPriceType $Price
     * @param ItemErrorsType $ItemError
     * @param CouponCodeType $couponCode
     * @param int $itemId
     * @param anonymous32 $customerReference
     * @param string $cancelReason
     * @param dateTime $canceledAt
     * @param float $cancelAmount
     * @param BaseLabelAddressType $SenderAddress
     * @param BaseLabelAddressType $ReceiverAddress
     * @param ShipmentDimensionType $Dimension
     * @param ProductIdType $productId
     * @param anonymous27 $shipmentId
     * @param anonymous28 $routingCode
     * @param string $airwayBillNumber
     * @param Cn22Type $CnDeclaration
     * @param DirectLabelType $DirectLabel
     * @param dateTime $printedAt
     * @param string $labelId
     * @param string $pdfDownloadUrl
     * @param PreAdviceType $preAdviceType
     * @param RecomandCodeType $recomandCode
     * @param string $awtDownloadUrl
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber, $CnDeclaration, $DirectLabel, $printedAt, $labelId, $pdfDownloadUrl, $preAdviceType, $recomandCode, $awtDownloadUrl)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber);
      $this->CnDeclaration = $CnDeclaration;
      $this->DirectLabel = $DirectLabel;
      $this->printedAt = $printedAt;
      $this->labelId = $labelId;
      $this->pdfDownloadUrl = $pdfDownloadUrl;
      $this->preAdviceType = $preAdviceType;
      $this->recomandCode = $recomandCode;
      $this->awtDownloadUrl = $awtDownloadUrl;
    }

}
