<?php namespace Tmende\Dhl\Api\ShipmentTracking;

use Illuminate\Support\Collection;
use Tmende\Dhl\Api\ShipmentTracking\PieceStatus;

class CollectionPieceStatus extends Collection {

	/**
     * @param array $items A array of PieceStatus items
     * @access public
     */
	public function __construct(array $items = array())
	{
		parent::__construct($items);
	}

	/**
     * @param string $xml
     * @return void
     * @access public
     */
	public function generateFromXML($xml)
	{
		$tempArray = simplexml_load_string($xml)->data->data;

		foreach ($tempArray as $piece) {
			$pieceStatus = new PieceStatus;
			$pieceStatus->status = (string) $piece['status'];
			$pieceStatus->pieceStatus = (string) $piece['piece-status'];
			$pieceStatus->statusNext = (string) $piece['status-next'];
			$pieceStatus->errorStatus = (string) $piece['error-status'];
			$pieceStatus->standardEventCode = (string) $piece['standard-event-code'];
			$pieceStatus->lastEventTimestamp = date("Y-m-d H:i:s", strtotime((string) $piece['last-event-timestamp']));
			$pieceStatus->pieceCode = (string) $piece['piece-code'];
			$pieceStatus->pieceIdentifier = (string) $piece['piece-identifier'];
			$pieceStatus->pieceId = (string) $piece['piece-id'];
			$pieceStatus->identifierType = (string) $piece['identifier-type'];
			$pieceStatus->pslzNr = (string) $piece['pslz-nr'];
			$pieceStatus->internationalFlag = (bool)(string) $piece['international-flag'];
			$pieceStatus->deliveryEventFlag = (bool)(string) $piece['delivery-event-flag'];
			$pieceStatus->productName = (string) $piece['product-name'];
			$pieceStatus->productCode = (string) $piece['product-code'];
			$pieceStatus->division = (string) $piece['division'];
			$pieceStatus->ice = (string) $piece['ice'];
			$pieceStatus->ric = (string) $piece['ric'];
			$pieceStatus->upu = (string) $piece['upu'];
			$pieceStatus->destCountry = (string) $piece['dest-country'];
			$pieceStatus->originCountry = (string) $piece['origin-country'];

			$this->push($pieceStatus);
		}
	}

}