<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\MTItemType;

class MTItemMulticollieType extends MTItemType
{

    /**
     * @var MTCollie $MTCollie
     * @access public
     */
    public $MTCollie = null;

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
     * @param MTCollie $MTCollie
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber, $shipmentDescription, $gplOrderNo, $pickupDate, $MTCollie)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $SenderAddress, $ReceiverAddress, $Dimension, $productId, $shipmentId, $routingCode, $airwayBillNumber, $shipmentDescription, $gplOrderNo, $pickupDate);
      $this->MTCollie = $MTCollie;
    }

}
