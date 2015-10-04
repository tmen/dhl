<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ProductServiceDescBaseType;

class ServiceDescType extends ProductServiceDescBaseType
{

    /**
     * @var string $orderKey
     * @access public
     */
    public $orderKey = null;

    /**
     * @var string $serviceGroup
     * @access public
     */
    public $serviceGroup = null;

    /**
     * @var boolean $serviceGroupDefault
     * @access public
     */
    public $serviceGroupDefault = null;

    /**
     * @var boolean $syntetic
     * @access public
     */
    public $syntetic = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param string $features
     * @param string $attributes
     * @param string $displayName
     * @param string $displayDescription
     * @param string $orderKey
     * @param string $serviceGroup
     * @param boolean $serviceGroupDefault
     * @param boolean $syntetic
     * @access public
     */
    public function __construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription, $orderKey, $serviceGroup, $serviceGroupDefault, $syntetic)
    {
      parent::__construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription);
      $this->orderKey = $orderKey;
      $this->serviceGroup = $serviceGroup;
      $this->serviceGroupDefault = $serviceGroupDefault;
      $this->syntetic = $syntetic;
    }

}
