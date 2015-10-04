<?php

class CancelPickupRequest
{

    /**
     * @var Version $Version
     * @access public
     */
    public $Version = null;

    /**
     * @var string $BookingConfirmationNumber
     * @access public
     */
    public $BookingConfirmationNumber = null;

    /**
     * @param Version $Version
     * @param string $BookingConfirmationNumber
     * @access public
     */
    public function __construct($Version, $BookingConfirmationNumber)
    {
      $this->Version = $Version;
      $this->BookingConfirmationNumber = $BookingConfirmationNumber;
    }

}
