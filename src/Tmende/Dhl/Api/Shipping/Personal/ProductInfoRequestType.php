<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsRequestType;

class ProductInfoRequestType extends WsRequestType
{

    /**
     * @var ProductInfoFilterType $Filter
     * @access public
     */
    public $Filter = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @param ProductInfoFilterType $Filter
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version, $Filter)
    {
      parent::__construct($Auth, $detailFlags, $version);
      $this->Filter = $Filter;
    }

}
