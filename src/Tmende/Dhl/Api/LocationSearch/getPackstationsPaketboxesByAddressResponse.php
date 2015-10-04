<?php

class getPackstationsPaketboxesByAddressResponse
{

    /**
     * @var automatWS[] $packstation_paketbox
     * @access public
     */
    public $packstation_paketbox = null;

    /**
     * @param automatWS[] $packstation_paketbox
     * @access public
     */
    public function __construct($packstation_paketbox)
    {
      $this->packstation_paketbox = $packstation_paketbox;
    }

}
