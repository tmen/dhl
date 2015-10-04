<?php

class CreationState
{

    /**
     * @var StatusCode $StatusCode
     * @access public
     */
    public $StatusCode = null;

    /**
     * @var StatusMessage $StatusMessage
     * @access public
     */
    public $StatusMessage = null;

    /**
     * @var SequenceNumber $SequenceNumber
     * @access public
     */
    public $SequenceNumber = null;

    /**
     * @var ShipmentNumberType $ShipmentNumber
     * @access public
     */
    public $ShipmentNumber = null;

    /**
     * @var PieceInformation $PieceInformation
     * @access public
     */
    public $PieceInformation = null;

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
     * @var string $PickupConfirmationNumber
     * @access public
     */
    public $PickupConfirmationNumber = null;

    /**
     * @param StatusCode $StatusCode
     * @param StatusMessage $StatusMessage
     * @param SequenceNumber $SequenceNumber
     * @param ShipmentNumberType $ShipmentNumber
     * @param PieceInformation $PieceInformation
     * @param string $Labelurl
     * @param string $XMLLabel
     * @param string $PickupConfirmationNumber
     * @access public
     */
    public function __construct($StatusCode, $StatusMessage, $SequenceNumber, $ShipmentNumber, $PieceInformation, $Labelurl, $XMLLabel, $PickupConfirmationNumber)
    {
      $this->StatusCode = $StatusCode;
      $this->StatusMessage = $StatusMessage;
      $this->SequenceNumber = $SequenceNumber;
      $this->ShipmentNumber = $ShipmentNumber;
      $this->PieceInformation = $PieceInformation;
      $this->Labelurl = $Labelurl;
      $this->XMLLabel = $XMLLabel;
      $this->PickupConfirmationNumber = $PickupConfirmationNumber;
    }

}
