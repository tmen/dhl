<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ProductServiceDescBaseType;

class CollectionDescType extends ProductServiceDescBaseType
{

    /**
     * @var string $pickupFreeHint
     * @access public
     */
    public $pickupFreeHint = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param string $features
     * @param string $attributes
     * @param string $displayName
     * @param string $displayDescription
     * @param string $pickupFreeHint
     * @access public
     */
    public function __construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription, $pickupFreeHint)
    {
      parent::__construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription);
      $this->pickupFreeHint = $pickupFreeHint;
    }

}
