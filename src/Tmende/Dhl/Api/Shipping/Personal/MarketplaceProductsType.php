<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class MarketplaceProductsType
{

    /**
     * @var ProductGroupType[] $ProductGroup
     * @access public
     */
    public $ProductGroup = null;

    /**
     * @var string $partnerId
     * @access public
     */
    public $partnerId = null;

    /**
     * @var string $configTime
     * @access public
     */
    public $configTime = null;

    /**
     * @var string $popConfigId
     * @access public
     */
    public $popConfigId = null;

    /**
     * @var string $defaultGroup
     * @access public
     */
    public $defaultGroup = null;

    /**
     * @param ProductGroupType[] $ProductGroup
     * @param string $partnerId
     * @param string $configTime
     * @param string $popConfigId
     * @param string $defaultGroup
     * @access public
     */
    public function __construct($ProductGroup, $partnerId, $configTime, $popConfigId, $defaultGroup)
    {
      $this->ProductGroup = $ProductGroup;
      $this->partnerId = $partnerId;
      $this->configTime = $configTime;
      $this->popConfigId = $popConfigId;
      $this->defaultGroup = $defaultGroup;
    }

}
