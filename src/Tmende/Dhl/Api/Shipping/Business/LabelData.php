<?php

class LabelData
{

    /**
     * @var ShipmentNumberType $ShipmentNumber
     * @access public
     */
    public $ShipmentNumber = null;

    /**
     * @var Statusinformation $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $Labelurl
     * @access public
     */
    public $Labelurl = null;

    /**
     * @var string $XMLLabel
     * @access public
     */
    public $XMLLabel = null;

    /**
     * @param ShipmentNumberType $ShipmentNumber
     * @param Statusinformation $Status
     * @param string $Labelurl
     * @param string $XMLLabel
     * @access public
     */
    public function __construct($ShipmentNumber, $Status, $Labelurl, $XMLLabel)
    {
      $this->ShipmentNumber = $ShipmentNumber;
      $this->Status = $Status;
      $this->Labelurl = $Labelurl;
      $this->XMLLabel = $XMLLabel;
    }

}
