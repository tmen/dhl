<?php

class Pickup
{

    /**
     * @var PickupDetailsType $PickupDetails
     * @access public
     */
    public $PickupDetails = null;

    /**
     * @var PickupAddressType $PickupAddress
     * @access public
     */
    public $PickupAddress = null;

    /**
     * @param PickupDetailsType $PickupDetails
     * @param PickupAddressType $PickupAddress
     * @access public
     */
    public function __construct($PickupDetails, $PickupAddress)
    {
      $this->PickupDetails = $PickupDetails;
      $this->PickupAddress = $PickupAddress;
    }

}
