<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class ServiceType extends NamedReferenceType
{

    /**
     * @var ServiceDescType $ServiceDesc
     * @access public
     */
    public $ServiceDesc = null;

    /**
     * @var PricesType[] $Prices
     * @access public
     */
    public $Prices = null;

    /**
     * @var boolean $priceLevels
     * @access public
     */
    public $priceLevels = null;

    /**
     * @var boolean $selected
     * @access public
     */
    public $selected = null;

    /**
     * @var string $ekp
     * @access public
     */
    public $ekp = null;

    /**
     * @var boolean $disabled
     * @access public
     */
    public $disabled = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param ServiceDescType $ServiceDesc
     * @param PricesType[] $Prices
     * @param boolean $priceLevels
     * @param boolean $selected
     * @param string $ekp
     * @param boolean $disabled
     * @access public
     */
    public function __construct($id, $idref, $name, $ServiceDesc, $Prices, $priceLevels, $selected, $ekp, $disabled)
    {
      parent::__construct($id, $idref, $name);
      $this->ServiceDesc = $ServiceDesc;
      $this->Prices = $Prices;
      $this->priceLevels = $priceLevels;
      $this->selected = $selected;
      $this->ekp = $ekp;
      $this->disabled = $disabled;
    }

}
