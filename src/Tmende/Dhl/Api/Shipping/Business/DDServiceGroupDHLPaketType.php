<?php

class DDServiceGroupDHLPaketType
{

    /**
     * @var boolean $Multipack
     * @access public
     */
    public $Multipack = null;

    /**
     * @var boolean $RegioPacket
     * @access public
     */
    public $RegioPacket = null;

    /**
     * @var boolean $ParticularDelivery
     * @access public
     */
    public $ParticularDelivery = null;

    /**
     * @var ShipmentAdvisory $ShipmentAdvisory
     * @access public
     */
    public $ShipmentAdvisory = null;

    /**
     * @var Endorsement $Endorsement
     * @access public
     */
    public $Endorsement = null;

    /**
     * @param boolean $Multipack
     * @param boolean $RegioPacket
     * @param boolean $ParticularDelivery
     * @param ShipmentAdvisory $ShipmentAdvisory
     * @param Endorsement $Endorsement
     * @access public
     */
    public function __construct($Multipack, $RegioPacket, $ParticularDelivery, $ShipmentAdvisory, $Endorsement)
    {
      $this->Multipack = $Multipack;
      $this->RegioPacket = $RegioPacket;
      $this->ParticularDelivery = $ParticularDelivery;
      $this->ShipmentAdvisory = $ShipmentAdvisory;
      $this->Endorsement = $Endorsement;
    }

}
