<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartBaseType;

class DownloadShoppingCartType extends ShoppingCartBaseType
{

    /**
     * @var PaymentInfoType $PaymentInfo
     * @access public
     */
    public $PaymentInfo = null;

    /**
     * @var string $downloadPageUrl
     * @access public
     */
    public $downloadPageUrl = null;

    /**
     * @var string $appletUrl
     * @access public
     */
    public $appletUrl = null;

    /**
     * @var float $cancelSumAmount
     * @access public
     */
    public $cancelSumAmount = null;

    /**
     * @var string $invoiceUrl
     * @access public
     */
    public $invoiceUrl = null;

    /**
     * @var string $notifyUrlExt
     * @access public
     */
    public $notifyUrlExt = null;

    /**
     * @param string $shoppingCartId
     * @param anonymous68 $customerReference
     * @param string $nextShoppingCartId
     * @param ItemErrorsType $ItemError
     * @param BaseLabelAddressType $Orderer
     * @param LabelItemType $LabelItem
     * @param MTItemType $MTItem
     * @param CouponSetItemType $CouponSetItem
     * @param PickupItemType $PickupItem
     * @param PaymentInfoType $PaymentInfo
     * @param string $downloadPageUrl
     * @param string $appletUrl
     * @param float $cancelSumAmount
     * @param string $invoiceUrl
     * @param string $notifyUrlExt
     * @access public
     */
    public function __construct($shoppingCartId, $customerReference, $nextShoppingCartId, $ItemError, $Orderer, $LabelItem, $MTItem, $CouponSetItem, $PickupItem, $PaymentInfo, $downloadPageUrl, $appletUrl, $cancelSumAmount, $invoiceUrl, $notifyUrlExt)
    {
      parent::__construct($shoppingCartId, $customerReference, $nextShoppingCartId, $ItemError, $Orderer, $LabelItem, $MTItem, $CouponSetItem, $PickupItem);
      $this->PaymentInfo = $PaymentInfo;
      $this->downloadPageUrl = $downloadPageUrl;
      $this->appletUrl = $appletUrl;
      $this->cancelSumAmount = $cancelSumAmount;
      $this->invoiceUrl = $invoiceUrl;
      $this->notifyUrlExt = $notifyUrlExt;
    }

}
