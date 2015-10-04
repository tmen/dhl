<?php

class ShipmentDetailsType
{

    /**
     * @var string $ProductCode
     * @access public
     */
    public $ProductCode = null;

    /**
     * @var ShipmentDate $ShipmentDate
     * @access public
     */
    public $ShipmentDate = null;

    /**
     * @var DeclaredValueOfGoods $DeclaredValueOfGoods
     * @access public
     */
    public $DeclaredValueOfGoods = null;

    /**
     * @var string $DeclaredValueOfGoodsCurrency
     * @access public
     */
    public $DeclaredValueOfGoodsCurrency = null;

    /**
     * @param string $ProductCode
     * @param ShipmentDate $ShipmentDate
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @param string $DeclaredValueOfGoodsCurrency
     * @access public
     */
    public function __construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency)
    {
      $this->ProductCode = $ProductCode;
      $this->ShipmentDate = $ShipmentDate;
      $this->DeclaredValueOfGoods = $DeclaredValueOfGoods;
      $this->DeclaredValueOfGoodsCurrency = $DeclaredValueOfGoodsCurrency;
    }

}
