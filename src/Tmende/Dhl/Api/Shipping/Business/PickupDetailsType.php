<?php

class PickupDetailsType
{

    /**
     * @var PickupDate $PickupDate
     * @access public
     */
    public $PickupDate = null;

    /**
     * @var ReadyByTime $ReadyByTime
     * @access public
     */
    public $ReadyByTime = null;

    /**
     * @var ClosingTime $ClosingTime
     * @access public
     */
    public $ClosingTime = null;

    /**
     * @var string $Remark
     * @access public
     */
    public $Remark = null;

    /**
     * @var string $PickupLocation
     * @access public
     */
    public $PickupLocation = null;

    /**
     * @param PickupDate $PickupDate
     * @param ReadyByTime $ReadyByTime
     * @param ClosingTime $ClosingTime
     * @param string $Remark
     * @param string $PickupLocation
     * @access public
     */
    public function __construct($PickupDate, $ReadyByTime, $ClosingTime, $Remark, $PickupLocation)
    {
      $this->PickupDate = $PickupDate;
      $this->ReadyByTime = $ReadyByTime;
      $this->ClosingTime = $ClosingTime;
      $this->Remark = $Remark;
      $this->PickupLocation = $PickupLocation;
    }

}
