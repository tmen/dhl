<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ReferenceType;

class NamedReferenceType extends ReferenceType
{

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @access public
     */
    public function __construct($id, $idref, $name)
    {
      parent::__construct($id, $idref);
      $this->name = $name;
    }

}
