<?php namespace Tmende\Dhl\Api\ShipmentTracking;

class PieceStatus {

	/**
	*
	* @var string $status Current shipping status
	* @access public
	*/
    public $status;

	/**
	*
	* @var string $status Status of an individual piece
	* @access public
	*/
    public $pieceStatus;

    /**
	*
	* @var string $statusNext Description of the next step
	* @access public
	*/
    public $statusNext;

    /**
	*
	* @var string $errorStatus Error status for the current shipment
	* @access public
	*/
    public $errorStatus;

    /**
	*
	* @var string $standardEventCode Default code for the shipment event
	* @access public
	*/
    public $standardEventCode;

    /**
	*
	* @var timestamp $lastEventTimestamp Time stamp for the current status in the format DD.MM.YYYY SS:MM
	* @access public
	*/
    public $lastEventTimestamp;

    /**
	*
	* @var string $pieceCode Shipment number
	* @access public
	*/
    public $pieceCode;

    /**
	*
	* @var string $pieceIdentifier Shipment number
	* @access public
	*/
    public $pieceIdentifier;

    /**
	*
	* @var string $pieceId Unique piece ID
	* @access public
	*/
    public $pieceId;

    /**
	*
	* @var string $identifierType Describes the shipment number type (1 = IDC, 2 = LP EAN, 3 = LP Ansi/Fact, etc.)
	* @access public
	*/
    public $identifierType;

    /**
	*
	* @var string $pslzNr
	* @access public
	*/
    public $pslzNr;

    /**
	*
	* @var bool internationalFlag Designates a shipment that has been sent to / from abroad
	* @access public
	*/
    public $internationalFlag;

    /**
	*
	* @var bool deliveryEventFlag Returns 1 as the result if the shipment has been delivered. If the shipment is still being delivered, the value is returned as 0.
	* @access public
	*/
    public $deliveryEventFlag;

    /**
	*
	* @var string productName Product name (e.g. DHL Paket)
	* @access public
	*/
    public $productName;

    /**
	*
	* @var string productCode Product key
	* @access public
	*/
    public $productCode;

    /**
	*
	* @var string division Designates the internal production line
	* @access public
	*/
    public $division;

    /**
	*
	* @var string ice "International Coded Event" (see ICE/RIC attachment)
	* @access public
	*/
    public $ice;

    /**
	*
	* @var string ric "Reason Instruction Code"  (see ICE/RIC attachment)
	* @access public
	*/
    public $ric;

    /**
	*
	* @var string upu UPU / Matchcode for foreign shipments
	* @access public
	*/
    public $upu;

    /**
	*
	* @var string destCountry ISO code for the shipment's destination country (e.g. DE for Germany)
	* @access public
	*/
    public $destCountry;

    /**
	*
	* @var string originCountry ISO code for the shipment's country of origin (e.g. DE for Germany)
	* @access public
	*/
    public $originCountry;
}