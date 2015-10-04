<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ProductGroupType
{

    /**
     * @var CountryProductsType[] $CountryProducts
     * @access public
     */
    public $CountryProducts = null;

    /**
     * @var CollectionType[] $Collection
     * @access public
     */
    public $Collection = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $displayText
     * @access public
     */
    public $displayText = null;

    /**
     * @param CountryProductsType[] $CountryProducts
     * @param CollectionType[] $Collection
     * @param string $name
     * @param string $displayText
     * @access public
     */
    public function __construct($CountryProducts, $Collection, $name, $displayText)
    {
      $this->CountryProducts = $CountryProducts;
      $this->Collection = $Collection;
      $this->name = $name;
      $this->displayText = $displayText;
    }

}
