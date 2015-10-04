<?php

class FurtherAddressesDDType
{

    /**
     * @var DeliveryAdress $DeliveryAdress
     * @access public
     */
    public $DeliveryAdress = null;

    /**
     * @param DeliveryAdress $DeliveryAdress
     * @access public
     */
    public function __construct($DeliveryAdress)
    {
      $this->DeliveryAdress = $DeliveryAdress;
    }

}
