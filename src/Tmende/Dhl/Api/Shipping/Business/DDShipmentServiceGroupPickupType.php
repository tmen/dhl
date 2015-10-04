<?php

class DDShipmentServiceGroupPickupType
{

    /**
     * @var boolean $PickupSaturday
     * @access public
     */
    public $PickupSaturday = null;

    /**
     * @var boolean $PickupLate
     * @access public
     */
    public $PickupLate = null;

    /**
     * @param boolean $PickupSaturday
     * @param boolean $PickupLate
     * @access public
     */
    public function __construct($PickupSaturday, $PickupLate)
    {
      $this->PickupSaturday = $PickupSaturday;
      $this->PickupLate = $PickupLate;
    }

}
