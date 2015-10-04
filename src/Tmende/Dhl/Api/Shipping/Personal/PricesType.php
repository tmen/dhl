<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ReferenceType;

class PricesType extends ReferenceType
{

    /**
     * @var PriceType[] $Price
     * @access public
     */
    public $Price = null;

    /**
     * @var int $level
     * @access public
     */
    public $level = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param PriceType[] $Price
     * @param int $level
     * @access public
     */
    public function __construct($id, $idref, $Price, $level)
    {
      parent::__construct($id, $idref);
      $this->Price = $Price;
      $this->level = $level;
    }

}
