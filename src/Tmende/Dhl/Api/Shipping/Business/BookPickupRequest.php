<?php

class BookPickupRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var PickupBookingInformationType $BookingInformation
     * @access public
     */
    public $BookingInformation = null;

    /**
     * @var PickupAddressType $PickupAddress
     * @access public
     */
    public $PickupAddress = null;

    /**
     * @var PickupOrdererType $ContactOrderer
     * @access public
     */
    public $ContactOrderer = null;

    /**
     * @param Version $Version
     * @param PickupBookingInformationType $BookingInformation
     * @param PickupAddressType $PickupAddress
     * @param PickupOrdererType $ContactOrderer
     * @access public
     */
    public function __construct($Version, $BookingInformation, $PickupAddress, $ContactOrderer)
    {
      $this->Version = $Version;
      $this->BookingInformation = $BookingInformation;
      $this->PickupAddress = $PickupAddress;
      $this->ContactOrderer = $ContactOrderer;
    }

}
