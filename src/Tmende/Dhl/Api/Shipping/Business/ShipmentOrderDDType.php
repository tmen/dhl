<?php

class ShipmentOrderDDType
{

    /**
     * @var SequenceNumber $SequenceNumber
     * @access public
     */
    public $SequenceNumber = null;

    /**
     * @var Shipment $Shipment
     * @access public
     */
    public $Shipment = null;

    /**
     * @var Pickup $Pickup
     * @access public
     */
    public $Pickup = null;

    /**
     * @var LabelResponseType $LabelResponseType
     * @access public
     */
    public $LabelResponseType = null;

    /**
     * @var PRINTONLYIFCODEABLE $PRINTONLYIFCODEABLE
     * @access public
     */
    public $PRINTONLYIFCODEABLE = null;

    /**
     * @param SequenceNumber $SequenceNumber
     * @param Shipment $Shipment
     * @param Pickup $Pickup
     * @param LabelResponseType $LabelResponseType
     * @param PRINTONLYIFCODEABLE $PRINTONLYIFCODEABLE
     * @access public
     */
    public function __construct($SequenceNumber, $Shipment, $Pickup, $LabelResponseType, $PRINTONLYIFCODEABLE)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->Shipment = $Shipment;
      $this->Pickup = $Pickup;
      $this->LabelResponseType = $LabelResponseType;
      $this->PRINTONLYIFCODEABLE = $PRINTONLYIFCODEABLE;
    }

}
