<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemPriceType
{

    /**
     * @var PriceComponentType $PriceComponents
     * @access public
     */
    public $PriceComponents = null;

    /**
     * @param PriceComponentType $PriceComponents
     * @access public
     */
    public function __construct($PriceComponents)
    {
      $this->PriceComponents = $PriceComponents;
    }

}
