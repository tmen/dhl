<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsResponseType;

class LoadBuyedShoppingCartResponseType extends WsResponseType
{

    /**
     * @var DownloadShoppingCartType $DownloadShoppingCart
     * @access public
     */
    public $DownloadShoppingCart = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @param DownloadShoppingCartType $DownloadShoppingCart
     * @access public
     */
    public function __construct($Status, $version, $DownloadShoppingCart)
    {
      parent::__construct($Status, $version);
      $this->DownloadShoppingCart = $DownloadShoppingCart;
    }

}
