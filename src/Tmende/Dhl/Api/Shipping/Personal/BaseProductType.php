<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class BaseProductType extends NamedReferenceType
{

    /**
     * @var PricesType[] $Prices
     * @access public
     */
    public $Prices = null;

    /**
     * @var BaseProductDescType $BaseProductDesc
     * @access public
     */
    public $BaseProductDesc = null;

    /**
     * @var ProductType[] $Product
     * @access public
     */
    public $Product = null;

    /**
     * @var string $defaultProduct
     * @access public
     */
    public $defaultProduct = null;

    /**
     * @var string $ekp
     * @access public
     */
    public $ekp = null;

    /**
     * @var boolean $priceLevels
     * @access public
     */
    public $priceLevels = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param PricesType[] $Prices
     * @param BaseProductDescType $BaseProductDesc
     * @param ProductType[] $Product
     * @param string $defaultProduct
     * @param string $ekp
     * @param boolean $priceLevels
     * @access public
     */
    public function __construct($id, $idref, $name, $Prices, $BaseProductDesc, $Product, $defaultProduct, $ekp, $priceLevels)
    {
      parent::__construct($id, $idref, $name);
      $this->Prices = $Prices;
      $this->BaseProductDesc = $BaseProductDesc;
      $this->Product = $Product;
      $this->defaultProduct = $defaultProduct;
      $this->ekp = $ekp;
      $this->priceLevels = $priceLevels;
    }

}
