<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ItemType.php;

class CouponSetItemType extends ItemType
{

    /**
     * @var CouponInfoType $Coupon
     * @access public
     */
    public $Coupon = null;

    /**
     * @var anonymous34 $couponTypeId
     * @access public
     */
    public $couponTypeId = null;

    /**
     * @var int $chunkSize
     * @access public
     */
    public $chunkSize = null;

    /**
     * @param ItemPriceType $Price
     * @param ItemErrorsType $ItemError
     * @param CouponCodeType $couponCode
     * @param int $itemId
     * @param anonymous32 $customerReference
     * @param string $cancelReason
     * @param dateTime $canceledAt
     * @param float $cancelAmount
     * @param CouponInfoType $Coupon
     * @param anonymous34 $couponTypeId
     * @param int $chunkSize
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount, $Coupon, $couponTypeId, $chunkSize)
    {
      parent::__construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount);
      $this->Coupon = $Coupon;
      $this->couponTypeId = $couponTypeId;
      $this->chunkSize = $chunkSize;
    }

}
