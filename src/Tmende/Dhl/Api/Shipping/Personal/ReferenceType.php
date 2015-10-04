<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ReferenceType
{

    /**
     * @var ID $id
     * @access public
     */
    public $id = null;

    /**
     * @var IDREF $idref
     * @access public
     */
    public $idref = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @access public
     */
    public function __construct($id, $idref)
    {
      $this->id = $id;
      $this->idref = $idref;
    }

}
