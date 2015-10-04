<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsResponseType;

class ShoppingCartOpenResponseType extends WsResponseType
{

    /**
     * @var string $redirectUrl
     * @access public
     */
    public $redirectUrl = null;

    /**
     * @var string $shoppingCartId
     * @access public
     */
    public $shoppingCartId = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @param string $redirectUrl
     * @param string $shoppingCartId
     * @access public
     */
    public function __construct($Status, $version, $redirectUrl, $shoppingCartId)
    {
      parent::__construct($Status, $version);
      $this->redirectUrl = $redirectUrl;
      $this->shoppingCartId = $shoppingCartId;
    }

}
