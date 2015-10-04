<?php

include_once('ShipmentItemType.php');

class ShipmentItemDDType extends ShipmentItemType
{

    /**
     * @var string $PackageType
     * @access public
     */
    public $PackageType = null;

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     * @param string $PackageType
     * @access public
     */
    public function __construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM, $PackageType)
    {
      parent::__construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM);
      $this->PackageType = $PackageType;
    }

}
