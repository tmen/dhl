<?php

class getBranchesByAddress
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
     * @param inputAddress $address
     * @param string $service
     * @param inputTimeinfo $timeinfo
     * @param boolean $hasPackageAcceptance
     * @param boolean $hasNoPackageAcceptance
     * @access public
     */
    public function __construct($key, $address, $service, $timeinfo, $hasPackageAcceptance, $hasNoPackageAcceptance)
    {
      $this->key = $key;
      $this->address = $address;
      $this->service = $service;
      $this->timeinfo = $timeinfo;
      $this->hasPackageAcceptance = $hasPackageAcceptance;
      $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
    }

}
