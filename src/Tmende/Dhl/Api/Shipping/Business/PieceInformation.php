<?php

class PieceInformation
{

    /**
     * @var ShipmentNumberType $PieceNumber
     * @access public
     */
    public $PieceNumber = null;

    /**
     * @param ShipmentNumberType $PieceNumber
     * @access public
     */
    public function __construct($PieceNumber)
    {
      $this->PieceNumber = $PieceNumber;
    }

}
