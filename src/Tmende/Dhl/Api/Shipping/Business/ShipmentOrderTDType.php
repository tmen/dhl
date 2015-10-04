<?php

class ShipmentOrderTDType
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
     * @param SequenceNumber $SequenceNumber
     * @param Shipment $Shipment
     * @param Pickup $Pickup
     * @param LabelResponseType $LabelResponseType
     * @access public
     */
    public function __construct($SequenceNumber, $Shipment, $Pickup, $LabelResponseType)
    {
      $this->SequenceNumber = $SequenceNumber;
      $this->Shipment = $Shipment;
      $this->Pickup = $Pickup;
      $this->LabelResponseType = $LabelResponseType;
    }

}
