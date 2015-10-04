<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class CountryProductsType extends NamedReferenceType
{

    /**
     * @var BaseProductType[] $BaseProduct
     * @access public
     */
    public $BaseProduct = null;

    /**
     * @var boolean $isSyntetic
     * @access public
     */
    public $isSyntetic = null;

    /**
     * @var string $iso2
     * @access public
     */
    public $iso2 = null;

    /**
     * @var int $iso3num
     * @access public
     */
    public $iso3num = null;

    /**
     * @var string $displayName
     * @access public
     */
    public $displayName = null;

    /**
     * @var string $defaultBaseProduct
     * @access public
     */
    public $defaultBaseProduct = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param BaseProductType[] $BaseProduct
     * @param boolean $isSyntetic
     * @param string $iso2
     * @param int $iso3num
     * @param string $displayName
     * @param string $defaultBaseProduct
     * @access public
     */
    public function __construct($id, $idref, $name, $BaseProduct, $isSyntetic, $iso2, $iso3num, $displayName, $defaultBaseProduct)
    {
      parent::__construct($id, $idref, $name);
      $this->BaseProduct = $BaseProduct;
      $this->isSyntetic = $isSyntetic;
      $this->iso2 = $iso2;
      $this->iso3num = $iso3num;
      $this->displayName = $displayName;
      $this->defaultBaseProduct = $defaultBaseProduct;
    }

}
