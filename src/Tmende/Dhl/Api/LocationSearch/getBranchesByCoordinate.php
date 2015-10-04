<?php

class getBranchesByCoordinate
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
     * @var string $service
     * @access public
     */
    public $service = null;

    /**
     * @var inputTimeinfo $timeinfo
     * @access public
     */
    public $timeinfo = null;

    /**
     * @var boolean $hasPackageAcceptance
     * @access public
     */
    public $hasPackageAcceptance = null;

    /**
     * @var boolean $hasNoPackageAcceptance
     * @access public
     */
    public $hasNoPackageAcceptance = null;

    /**
     * @param string $key
     * @param location $location
     * @param string $service
     * @param inputTimeinfo $timeinfo
     * @param boolean $hasPackageAcceptance
     * @param boolean $hasNoPackageAcceptance
     * @access public
     */
    public function __construct($key, $location, $service, $timeinfo, $hasPackageAcceptance, $hasNoPackageAcceptance)
    {
      $this->key = $key;
      $this->location = $location;
      $this->service = $service;
      $this->timeinfo = $timeinfo;
      $this->hasPackageAcceptance = $hasPackageAcceptance;
      $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
    }

}
