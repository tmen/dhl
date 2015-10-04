<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsRequestType;

class ShoppingCartValidateRequestType extends WsRequestType
{

    /**
     * @var BuyShoppingCartType $ShoppingCart
     * @access public
     */
    public $ShoppingCart = null;

    /**
     * @var boolean $persist
     * @access public
     */
    public $persist = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @param BuyShoppingCartType $ShoppingCart
     * @param boolean $persist
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version, $ShoppingCart, $persist)
    {
      parent::__construct($Auth, $detailFlags, $version);
      $this->ShoppingCart = $ShoppingCart;
      $this->persist = $persist;
    }

}
