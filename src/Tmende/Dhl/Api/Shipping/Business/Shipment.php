<?php

class Shipment
{

    /**
     * @var ShipmentDetailsDDType $ShipmentDetails
     * @access public
     */
    public $ShipmentDetails = null;

    /**
     * @var ShipperDDType $Shipper
     * @access public
     */
    public $Shipper = null;

    /**
     * @var ReceiverDDType $Receiver
     * @access public
     */
    public $Receiver = null;

    /**
     * @var ExportDocumentDDType $ExportDocument
     * @access public
     */
    public $ExportDocument = null;

    /**
     * @var IdentityType $Identity
     * @access public
     */
    public $Identity = null;

    /**
     * @var FurtherAddressesDDType $FurtherAddresses
     * @access public
     */
    public $FurtherAddresses = null;

    /**
     * @param ShipmentDetailsDDType $ShipmentDetails
     * @param ShipperDDType $Shipper
     * @param ReceiverDDType $Receiver
     * @param ExportDocumentDDType $ExportDocument
     * @param IdentityType $Identity
     * @param FurtherAddressesDDType $FurtherAddresses
     * @access public
     */
    public function __construct($ShipmentDetails, $Shipper, $Receiver, $ExportDocument, $Identity, $FurtherAddresses)
    {
      $this->ShipmentDetails = $ShipmentDetails;
      $this->Shipper = $Shipper;
      $this->Receiver = $Receiver;
      $this->ExportDocument = $ExportDocument;
      $this->Identity = $Identity;
      $this->FurtherAddresses = $FurtherAddresses;
    }

}
