<?php

class locationWithDistance
{

    /**
     * @var float $latitude
     * @access public
     */
    public $latitude = null;

    /**
     * @var float $longitude
     * @access public
     */
    public $longitude = null;

    /**
     * @var int $distance
     * @access public
     */
    public $distance = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param int $distance
     * @access public
     */
    public function __construct($latitude, $longitude, $distance)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->distance = $distance;
    }

}
