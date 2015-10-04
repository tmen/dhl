<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsResponseType;

class ProductInfoResponseType extends WsResponseType
{

    /**
     * @var MarketplaceProductsType $MarketplaceProducts
     * @access public
     */
    public $MarketplaceProducts = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @param MarketplaceProductsType $MarketplaceProducts
     * @access public
     */
    public function __construct($Status, $version, $MarketplaceProducts)
    {
      parent::__construct($Status, $version);
      $this->MarketplaceProducts = $MarketplaceProducts;
    }

}
