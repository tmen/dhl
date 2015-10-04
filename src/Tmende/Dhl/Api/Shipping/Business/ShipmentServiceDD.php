<?php

class ShipmentServiceDD
{

    /**
     * @var DDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @access public
     */
    public $ServiceGroupDateTimeOption = null;

    /**
     * @var DDShipmentServiceGroupIdentType $ShipmentServiceGroupIdent
     * @access public
     */
    public $ShipmentServiceGroupIdent = null;

    /**
     * @var DDShipmentServiceGroupPickupType $ShipmentServiceGroupPickup
     * @access public
     */
    public $ShipmentServiceGroupPickup = null;

    /**
     * @var DDServiceGroupBusinessPackInternationalType $ServiceGroupBusinessPackInternational
     * @access public
     */
    public $ServiceGroupBusinessPackInternational = null;

    /**
     * @var DDServiceGroupDHLPaketType $ServiceGroupDHLPaket
     * @access public
     */
    public $ServiceGroupDHLPaket = null;

    /**
     * @var DDServiceGroupOtherType $ServiceGroupOther
     * @access public
     */
    public $ServiceGroupOther = null;

    /**
     * @param DDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @param DDShipmentServiceGroupIdentType $ShipmentServiceGroupIdent
     * @param DDShipmentServiceGroupPickupType $ShipmentServiceGroupPickup
     * @param DDServiceGroupBusinessPackInternationalType $ServiceGroupBusinessPackInternational
     * @param DDServiceGroupDHLPaketType $ServiceGroupDHLPaket
     * @param DDServiceGroupOtherType $ServiceGroupOther
     * @access public
     */
    public function __construct($ServiceGroupDateTimeOption, $ShipmentServiceGroupIdent, $ShipmentServiceGroupPickup, $ServiceGroupBusinessPackInternational, $ServiceGroupDHLPaket, $ServiceGroupOther)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      $this->ShipmentServiceGroupIdent = $ShipmentServiceGroupIdent;
      $this->ShipmentServiceGroupPickup = $ShipmentServiceGroupPickup;
      $this->ServiceGroupBusinessPackInternational = $ServiceGroupBusinessPackInternational;
      $this->ServiceGroupDHLPaket = $ServiceGroupDHLPaket;
      $this->ServiceGroupOther = $ServiceGroupOther;
    }

}
