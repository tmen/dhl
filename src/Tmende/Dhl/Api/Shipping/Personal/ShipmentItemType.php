<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ItemType;

class ShipmentItemType extends ItemType
{

    /**
     * @var BaseLabelAddressType $SenderAddress
     * @access public
     */
    public $SenderAddress = null;

    /**
     * @var BaseLabelAddressType $ReceiverAddress
     * @access public
     */
    public $ReceiverAddress = null;

    /**
     * @var ShipmentDimensionType $Dimension
     * @access public
     */
    public $Dimension = null;

    /**
     * @var ProductIdType $productId
     * @access public
     */
    public $productId = null;

    /**
     * @var anonymous27 $shipmentId
     * @access public
     */
    public $shipmentId = null;

    /**
     * @var anonymous28 $routingCode
     * @access public
     */
    public $routingCode = null;

    /**
     * @var string $airwayBillNumber
     * @access public
     */
    public $airwayBillNumber = null;

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
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount);
      $this->SenderAddress = $SenderAddress;
      $this->ReceiverAddress = $ReceiverAddress;
      $this->Dimension = $Dimension;
      $this->productId = $productId;
      $this->shipmentId = $shipmentId;
      $this->routingCode = $routingCode;
      $this->airwayBillNumber = $airwayBillNumber;
    }

}
