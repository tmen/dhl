<?php

class ShipmentNumberType
{

    /**
     * @var identCode $identCode
     * @access public
     */
    public $identCode = null;

    /**
     * @var licensePlate $licensePlate
     * @access public
     */
    public $licensePlate = null;

    /**
     * @var airwayBill $airwayBill
     * @access public
     */
    public $airwayBill = null;

    /**
     * @var shipmentNumber $shipmentNumber
     * @access public
     */
    public $shipmentNumber = null;

    /**
     * @param identCode $identCode
     * @param licensePlate $licensePlate
     * @param airwayBill $airwayBill
     * @param shipmentNumber $shipmentNumber
     * @access public
     */
    public function __construct($identCode, $licensePlate, $airwayBill, $shipmentNumber)
    {
      $this->identCode = $identCode;
      $this->licensePlate = $licensePlate;
      $this->airwayBill = $airwayBill;
      $this->shipmentNumber = $shipmentNumber;
    }

}
