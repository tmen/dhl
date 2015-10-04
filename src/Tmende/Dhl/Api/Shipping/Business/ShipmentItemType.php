<?php

class ShipmentItemType
{

    /**
     * @var WeightInKG $WeightInKG
     * @access public
     */
    public $WeightInKG = null;

    /**
     * @var LengthInCM $LengthInCM
     * @access public
     */
    public $LengthInCM = null;

    /**
     * @var WidthInCM $WidthInCM
     * @access public
     */
    public $WidthInCM = null;

    /**
     * @var HeightInCM $HeightInCM
     * @access public
     */
    public $HeightInCM = null;

    /**
     * @param WeightInKG $WeightInKG
     * @param LengthInCM $LengthInCM
     * @param WidthInCM $WidthInCM
     * @param HeightInCM $HeightInCM
     * @access public
     */
    public function __construct($WeightInKG, $LengthInCM, $WidthInCM, $HeightInCM)
    {
      $this->WeightInKG = $WeightInKG;
      $this->LengthInCM = $LengthInCM;
      $this->WidthInCM = $WidthInCM;
      $this->HeightInCM = $HeightInCM;
    }

}
