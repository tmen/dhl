<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartIdentificationType;

class ShoppingCartBaseType extends ShoppingCartIdentificationType
{

    /**
     * @var ItemErrorsType $ItemError
     * @access public
     */
    public $ItemError = null;

    /**
     * @var BaseLabelAddressType $Orderer
     * @access public
     */
    public $Orderer = null;

    /**
     * @var LabelItemType $LabelItem
     * @access public
     */
    public $LabelItem = null;

    /**
     * @var MTItemType $MTItem
     * @access public
     */
    public $MTItem = null;

    /**
     * @var CouponSetItemType $CouponSetItem
     * @access public
     */
    public $CouponSetItem = null;

    /**
     * @var PickupItemType $PickupItem
     * @access public
     */
    public $PickupItem = null;

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
     * @access public
     */
    public function __construct($shoppingCartId, $customerReference, $nextShoppingCartId, $ItemError, $Orderer, $LabelItem, $MTItem, $CouponSetItem, $PickupItem)
    {
      parent::__construct($shoppingCartId, $customerReference, $nextShoppingCartId);
      $this->ItemError = $ItemError;
      $this->Orderer = $Orderer;
      $this->LabelItem = $LabelItem;
      $this->MTItem = $MTItem;
      $this->CouponSetItem = $CouponSetItem;
      $this->PickupItem = $PickupItem;
    }

}
