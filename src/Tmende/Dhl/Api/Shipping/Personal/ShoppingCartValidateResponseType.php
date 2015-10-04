<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsResponseType;

class ShoppingCartValidateResponseType extends WsResponseType
{

    /**
     * @var BuyShoppingCartType $ShoppingCart
     * @access public
     */
    public $ShoppingCart = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @param BuyShoppingCartType $ShoppingCart
     * @access public
     */
    public function __construct($Status, $version, $ShoppingCart)
    {
      parent::__construct($Status, $version);
      $this->ShoppingCart = $ShoppingCart;
    }

}
