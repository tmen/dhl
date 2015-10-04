<?php namespace Tmende\Dhl;

use Credentials;

class BusinessCustomShipping {

	/**
     * @var Credentials
     */
    private $_credentials;

    /**
     * Constructor
     *
     * @param Credentials $credentials - (Dependency injection) If not provided, a Credentials instance will be constructed.
     */
    public function __construct(Credentials $credentials = null){
        if ( null === $credentials ) {
            // Create the Credentials
            $credentials = Credentials::getInstance();
        }
        $this->_credentials = $credentials;
    }

    /**
     * createShipmentDD
     * This function is used to create DD shipments and issue the relevant DHL Paket labels.
     *
     * @param
     */
    public function createShipmentDD() {

    }

    /**
     * createShipmentTD
     * This function is used to create TD shipments and issue the relevant DHL Express labels.
     *
     * @param
     */
    public function createShipmentTD() {

    }

    /**
     * deleteShipmentDD
     * This function is used to delete previously created DD shipments.
     *
     * @param
     */
    public function deleteShipmentDD() {

    }

    /**
     * deleteShipmentTD
     * This function is used to delete previously created TD shipments.
     *
     * @param
     */
    public function deleteShipmentTD() {

    }

    /**
     * getLabelDD
     * This function is used to retrieve labels for previously created DD shipments.
     *
     * @param
     */
    public function getLabelDD() {

    }

    /**
     * getLabelTD
     * This function is used to retrieve labels for previously created TD shipments.
     *
     * @param
     */
    public function getLabelTD() {

    }

    /**
     * bookPickup
     * This function creates a pick-up request in the DHL system for a shipment on the specified day from the specified address
     *
     * @param
     */
    public function bookPickup() {

    }

    /**
     * cancelPickup
     * This function cancels pick-ups using a valid confirmation number.
     *
     * @param
     */
    public function cancelPickup() {

    }

     /**
     * getExportDocDD
     * This function retrieves export documents that have previously been generated with the CreateShipmentDD operation.
     *
     * @param
     */
    public function getExportDocDD() {

    }

     /**
     * getExportDocTD
     * This function retrieves export documents that have previously been generated with the CreateShipmentTD operation.
     *
     * @param
     */
    public function getExportDocTD() {

    }
}