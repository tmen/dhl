<?php

class ExpressSaturday
{

    /**
     * @var ShippingDate $ShippingDate
     * @access public
     */
    public $ShippingDate = null;

    /**
     * @param ShippingDate $ShippingDate
     * @access public
     */
    public function __construct($ShippingDate)
    {
      $this->ShippingDate = $ShippingDate;
    }

}
