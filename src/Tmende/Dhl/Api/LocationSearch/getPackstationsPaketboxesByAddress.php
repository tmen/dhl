<?php

class getPackstationsPaketboxesByAddress
{

    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @var inputAddress $address
     * @access public
     */
    public $address = null;

    /**
     * @param string $key
     * @param inputAddress $address
     * @access public
     */
    public function __construct($key, $address)
    {
      $this->key = $key;
      $this->address = $address;
    }

}
