<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PriceComponentType
{

    /**
     * @var AmountType $bruttoAmount
     * @access public
     */
    public $bruttoAmount = null;

    /**
     * @var VatType $vat
     * @access public
     */
    public $vat = null;

    /**
     * @var ProductIdType $productId
     * @access public
     */
    public $productId = null;

    /**
     * @var CountryCodeType $productCountry
     * @access public
     */
    public $productCountry = null;

    /**
     * @var AmountType $encashVoucherAmount
     * @access public
     */
    public $encashVoucherAmount = null;

    /**
     * @var string $encashVoucherId
     * @access public
     */
    public $encashVoucherId = null;

    /**
     * @var string $encashDiscountReason
     * @access public
     */
    public $encashDiscountReason = null;

    /**
     * @var AmountType $encashDiscountAmount
     * @access public
     */
    public $encashDiscountAmount = null;

    /**
     * @param AmountType $bruttoAmount
     * @param VatType $vat
     * @param ProductIdType $productId
     * @param CountryCodeType $productCountry
     * @param AmountType $encashVoucherAmount
     * @param string $encashVoucherId
     * @param string $encashDiscountReason
     * @param AmountType $encashDiscountAmount
     * @access public
     */
    public function __construct($bruttoAmount, $vat, $productId, $productCountry, $encashVoucherAmount, $encashVoucherId, $encashDiscountReason, $encashDiscountAmount)
    {
      $this->bruttoAmount = $bruttoAmount;
      $this->vat = $vat;
      $this->productId = $productId;
      $this->productCountry = $productCountry;
      $this->encashVoucherAmount = $encashVoucherAmount;
      $this->encashVoucherId = $encashVoucherId;
      $this->encashDiscountReason = $encashDiscountReason;
      $this->encashDiscountAmount = $encashDiscountAmount;
    }

}
