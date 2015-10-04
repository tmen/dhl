<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShipmentItemType;

class MTItemType extends ShipmentItemType
{

    /**
     * @var anonymous38 $shipmentDescription
     * @access public
     */
    public $shipmentDescription = null;

    /**
     * @var string $gplOrderNo
     * @access public
     */
    public $gplOrderNo = null;

    /**
     * @var dateTime $pickupDate
     * @access public
     */
    public $pickupDate = null;

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
     * @param anonymous38 $shipmentDescription
     * @param string $gplOrderNo
     * @param dateTime $pickupDate
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber, $shipmentDescription, $gplOrderNo, $pickupDate)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber);
      $this->shipmentDescription = $shipmentDescription;
      $this->gplOrderNo = $gplOrderNo;
      $this->pickupDate = $pickupDate;
    }

}
