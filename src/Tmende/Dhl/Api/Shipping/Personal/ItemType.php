<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemType
{

    /**
     * @var ItemPriceType $Price
     * @access public
     */
    public $Price = null;

    /**
     * @var ItemErrorsType $ItemError
     * @access public
     */
    public $ItemError = null;

    /**
     * @var CouponCodeType $couponCode
     * @access public
     */
    public $couponCode = null;

    /**
     * @var int $itemId
     * @access public
     */
    public $itemId = null;

    /**
     * @var anonymous32 $customerReference
     * @access public
     */
    public $customerReference = null;

    /**
     * @var string $cancelReason
     * @access public
     */
    public $cancelReason = null;

    /**
     * @var dateTime $canceledAt
     * @access public
     */
    public $canceledAt = null;

    /**
     * @var float $cancelAmount
     * @access public
     */
    public $cancelAmount = null;

    /**
     * @param ItemPriceType $Price
     * @param ItemErrorsType $ItemError
     * @param CouponCodeType $couponCode
     * @param int $itemId
     * @param anonymous32 $customerReference
     * @param string $cancelReason
     * @param dateTime $canceledAt
     * @param float $cancelAmount
     * @access public
     */
    public function __construct($Price, $ItemError, $couponCode, $itemId, $customerReference, $cancelReason, $canceledAt, $cancelAmount)
    {
      $this->Price = $Price;
      $this->ItemError = $ItemError;
      $this->couponCode = $couponCode;
      $this->itemId = $itemId;
      $this->customerReference = $customerReference;
      $this->cancelReason = $cancelReason;
      $this->canceledAt = $canceledAt;
      $this->cancelAmount = $cancelAmount;
    }

}
