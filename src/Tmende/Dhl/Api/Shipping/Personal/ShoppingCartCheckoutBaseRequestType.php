<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsRequestType;

class ShoppingCartCheckoutBaseRequestType extends WsRequestType
{

    /**
     * @var ShoppingCartIdentificationType $ShoppingCartIdentification
     * @access public
     */
    public $ShoppingCartIdentification = null;

    /**
     * @var BuyShoppingCartType $BuyShoppingCart
     * @access public
     */
    public $BuyShoppingCart = null;

    /**
     * @var DirectLabelInfoType $DirectLabelInfo
     * @access public
     */
    public $DirectLabelInfo = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @param ShoppingCartIdentificationType $ShoppingCartIdentification
     * @param BuyShoppingCartType $BuyShoppingCart
     * @param DirectLabelInfoType $DirectLabelInfo
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version, $ShoppingCartIdentification, $BuyShoppingCart, $DirectLabelInfo)
    {
      parent::__construct($Auth, $detailFlags, $version);
      $this->ShoppingCartIdentification = $ShoppingCartIdentification;
      $this->BuyShoppingCart = $BuyShoppingCart;
      $this->DirectLabelInfo = $DirectLabelInfo;
    }

}
