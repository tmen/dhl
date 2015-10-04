<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsResponseType;

class ShoppingCartCheckoutViaPaymentResponseType extends WsResponseType
{

    /**
     * @var PaymentForwardShoppingCartType $PaymentForwardShoppingCart
     * @access public
     */
    public $PaymentForwardShoppingCart = null;

    /**
     * @var BuyShoppingCartType $BuyShoppingCart
     * @access public
     */
    public $BuyShoppingCart = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @param PaymentForwardShoppingCartType $PaymentForwardShoppingCart
     * @param BuyShoppingCartType $BuyShoppingCart
     * @access public
     */
    public function __construct($Status, $version, $PaymentForwardShoppingCart, $BuyShoppingCart)
    {
      parent::__construct($Status, $version);
      $this->PaymentForwardShoppingCart = $PaymentForwardShoppingCart;
      $this->BuyShoppingCart = $BuyShoppingCart;
    }

}
