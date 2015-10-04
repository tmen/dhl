<?php

class automatWS
{

    /**
     * @var int $automatType
     * @access public
     */
    public $automatType = null;

    /**
     * @var int $positionType
     * @access public
     */
    public $positionType = null;

    /**
     * @var int $opStatusType
     * @access public
     */
    public $opStatusType = null;

    /**
     * @var boolean $hasXLPostfach
     * @access public
     */
    public $hasXLPostfach = null;

    /**
     * @var int $distance
     * @access public
     */
    public $distance = null;

    /**
     * @var address $address
     * @access public
     */
    public $address = null;

    /**
     * @var locationWithDistance $location
     * @access public
     */
    public $location = null;

    /**
     * @var branch $branch
     * @access public
     */
    public $branch = null;

    /**
     * @var timeinfos $timeinfos
     * @access public
     */
    public $timeinfos = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var int $objectId
     * @access public
     */
    public $objectId = null;

    /**
     * @var int $packstationId
     * @access public
     */
    public $packstationId = null;

    /**
     * @param int $automatType
     * @param int $positionType
     * @param int $opStatusType
     * @param boolean $hasXLPostfach
     * @param int $distance
     * @param address $address
     * @param locationWithDistance $location
     * @param branch $branch
     * @param timeinfos $timeinfos
     * @param int $id
     * @param int $objectId
     * @param int $packstationId
     * @access public
     */
    public function __construct($automatType, $positionType, $opStatusType, $hasXLPostfach, $distance, $address, $location, $branch, $timeinfos, $id, $objectId, $packstationId)
    {
      $this->automatType = $automatType;
      $this->positionType = $positionType;
      $this->opStatusType = $opStatusType;
      $this->hasXLPostfach = $hasXLPostfach;
      $this->distance = $distance;
      $this->address = $address;
      $this->location = $location;
      $this->branch = $branch;
      $this->timeinfos = $timeinfos;
      $this->id = $id;
      $this->objectId = $objectId;
      $this->packstationId = $packstationId;
    }

}
