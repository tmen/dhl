<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PickupTimeType
{

    /**
     * @var anonymous70 $pickupType
     * @access public
     */
    public $pickupType = null;

    /**
     * @var dateTime $pickupDate
     * @access public
     */
    public $pickupDate = null;

    /**
     * @var string $pickupWindowId
     * @access public
     */
    public $pickupWindowId = null;

    /**
     * @var time $pickupFromTime
     * @access public
     */
    public $pickupFromTime = null;

    /**
     * @var time $pickupToTime
     * @access public
     */
    public $pickupToTime = null;

    /**
     * @param anonymous70 $pickupType
     * @param dateTime $pickupDate
     * @param string $pickupWindowId
     * @param time $pickupFromTime
     * @param time $pickupToTime
     * @access public
     */
    public function __construct($pickupType, $pickupDate, $pickupWindowId, $pickupFromTime, $pickupToTime)
    {
      $this->pickupType = $pickupType;
      $this->pickupDate = $pickupDate;
      $this->pickupWindowId = $pickupWindowId;
      $this->pickupFromTime = $pickupFromTime;
      $this->pickupToTime = $pickupToTime;
    }

}
