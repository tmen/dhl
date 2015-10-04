<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ItemType;

class PickupItemType extends ItemType
{

    /**
     * @var BaseLabelAddressType $address
     * @access public
     */
    public $address = null;

    /**
     * @var PickupTimeType $curPickupTime
     * @access public
     */
    public $curPickupTime = null;

    /**
     * @var PickupTimeType[] $availablePickupTimes
     * @access public
     */
    public $availablePickupTimes = null;

    /**
     * @var anonymous36 $pickupItemCount
     * @access public
     */
    public $pickupItemCount = null;

    /**
     * @param ItemPriceType $Price
     * @param ItemErrorsType $ItemError
     * @param CouponCodeType $couponCode
     * @param int $itemId
     * @param anonymous32 $customerReference
     * @param string $cancelReason
     * @param dateTime $canceledAt
     * @param float $cancelAmount
     * @param BaseLabelAddressType $address
     * @param PickupTimeType $curPickupTime
     * @param PickupTimeType[] $availablePickupTimes
     * @param anonymous36 $pickupItemCount
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $address, $curPickupTime, $availablePickupTimes, $pickupItemCount)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount);
      $this->address = $address;
      $this->curPickupTime = $curPickupTime;
      $this->availablePickupTimes = $availablePickupTimes;
      $this->pickupItemCount = $pickupItemCount;
    }

}
