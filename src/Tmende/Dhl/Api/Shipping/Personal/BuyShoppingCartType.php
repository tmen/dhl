<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartBaseType;

class BuyShoppingCartType extends ShoppingCartBaseType
{

    /**
     * @var PaymentNullpayType $PaymentNullpay
     * @access public
     */
    public $PaymentNullpay = null;

    /**
     * @var PaymentGiropayType $PaymentGiropay
     * @access public
     */
    public $PaymentGiropay = null;

    /**
     * @var PaymentPartnerpayType $PaymentPartner
     * @access public
     */
    public $PaymentPartner = null;

    /**
     * @var PaymentCreditcardType $PaymentCreditcard
     * @access public
     */
    public $PaymentCreditcard = null;

    /**
     * @var PaymentPaypalType $PaymentPaypal
     * @access public
     */
    public $PaymentPaypal = null;

    /**
     * @var PaymentDHLCheckoutType $PaymentDHLCheckout
     * @access public
     */
    public $PaymentDHLCheckout = null;

    /**
     * @var PaymentPostpayType $PaymentPostpay
     * @access public
     */
    public $PaymentPostpay = null;

    /**
     * @var boolean $acceptAgb
     * @access public
     */
    public $acceptAgb = null;

    /**
     * @var string $notifyUrl
     * @access public
     */
    public $notifyUrl = null;

    /**
     * @var boolean $sendUserEmail
     * @access public
     */
    public $sendUserEmail = null;

    /**
     * @var boolean $sendMaptosRSET
     * @access public
     */
    public $sendMaptosRSET = null;

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
     * @param PaymentNullpayType $PaymentNullpay
     * @param PaymentGiropayType $PaymentGiropay
     * @param PaymentPartnerpayType $PaymentPartner
     * @param PaymentCreditcardType $PaymentCreditcard
     * @param PaymentPaypalType $PaymentPaypal
     * @param PaymentDHLCheckoutType $PaymentDHLCheckout
     * @param PaymentPostpayType $PaymentPostpay
     * @param boolean $acceptAgb
     * @param string $notifyUrl
     * @param boolean $sendUserEmail
     * @param boolean $sendMaptosRSET
     * @access public
     */
    public function __construct($shoppingCartId, $customerReference, $nextShoppingCartId, $ItemError, $Orderer, $LabelItem, $MTItem, $CouponSetItem, $PickupItem, $PaymentNullpay, $PaymentGiropay, $PaymentPartner, $PaymentCreditcard, $PaymentPaypal, $PaymentDHLCheckout, $PaymentPostpay, $acceptAgb, $notifyUrl, $sendUserEmail, $sendMaptosRSET)
    {
      parent::__construct($shoppingCartId, $customerReference, $nextShoppingCartId, $ItemError, $Orderer, $LabelItem, $MTItem, $CouponSetItem, $PickupItem);
      $this->PaymentNullpay = $PaymentNullpay;
      $this->PaymentGiropay = $PaymentGiropay;
      $this->PaymentPartner = $PaymentPartner;
      $this->PaymentCreditcard = $PaymentCreditcard;
      $this->PaymentPaypal = $PaymentPaypal;
      $this->PaymentDHLCheckout = $PaymentDHLCheckout;
      $this->PaymentPostpay = $PaymentPostpay;
      $this->acceptAgb = $acceptAgb;
      $this->notifyUrl = $notifyUrl;
      $this->sendUserEmail = $sendUserEmail;
      $this->sendMaptosRSET = $sendMaptosRSET;
    }

}
