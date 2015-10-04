<?php

class getPackstationsByAddressResponse
{

    /**
     * @var automatWS[] $packstation
     * @access public
     */
    public $packstation = null;

    /**
     * @param automatWS[] $packstation
     * @access public
     */
    public function __construct($packstation)
    {
      $this->packstation = $packstation;
    }

}
