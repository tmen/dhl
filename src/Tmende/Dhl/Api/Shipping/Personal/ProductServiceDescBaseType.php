<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class ProductServiceDescBaseType extends NamedReferenceType
{

    /**
     * @var string $features
     * @access public
     */
    public $features = null;

    /**
     * @var string $attributes
     * @access public
     */
    public $attributes = null;

    /**
     * @var string $displayName
     * @access public
     */
    public $displayName = null;

    /**
     * @var string $displayDescription
     * @access public
     */
    public $displayDescription = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param string $features
     * @param string $attributes
     * @param string $displayName
     * @param string $displayDescription
     * @access public
     */
    public function __construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription)
    {
      parent::__construct($id, $idref, $name);
      $this->features = $features;
      $this->attributes = $attributes;
      $this->displayName = $displayName;
      $this->displayDescription = $displayDescription;
    }

}
