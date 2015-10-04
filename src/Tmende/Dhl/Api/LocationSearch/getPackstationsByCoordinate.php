<?php

class getPackstationsByCoordinate
{

    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @var location $location
     * @access public
     */
    public $location = null;

    /**
     * @param string $key
     * @param location $location
     * @access public
     */
    public function __construct($key, $location)
    {
      $this->key = $key;
      $this->location = $location;
    }

}
