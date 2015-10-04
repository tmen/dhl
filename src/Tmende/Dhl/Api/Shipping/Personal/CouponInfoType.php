<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class CouponInfoType
{

    /**
     * @var CouponSetInfoType $CouponSet
     * @access public
     */
    public $CouponSet = null;

    /**
     * @var CouponCodeType $couponCode
     * @access public
     */
    public $couponCode = null;

    /**
     * @var dateTime $validUntil
     * @access public
     */
    public $validUntil = null;

    /**
     * @var int $usageCounter
     * @access public
     */
    public $usageCounter = null;

    /**
     * @var string $createComment
     * @access public
     */
    public $createComment = null;

    /**
     * @var dateTime $createdAt
     * @access public
     */
    public $createdAt = null;

    /**
     * @param CouponSetInfoType $CouponSet
     * @param CouponCodeType $couponCode
     * @param dateTime $validUntil
     * @param int $usageCounter
     * @param string $createComment
     * @param dateTime $createdAt
     * @access public
     */
    public function __construct($CouponSet, $couponCode, $validUntil, $usageCounter, $createComment, $createdAt)
    {
      $this->CouponSet = $CouponSet;
      $this->couponCode = $couponCode;
      $this->validUntil = $validUntil;
      $this->usageCounter = $usageCounter;
      $this->createComment = $createComment;
      $this->createdAt = $createdAt;
    }

}
