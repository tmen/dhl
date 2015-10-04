<?php

class pobox
{

    /**
     * @var int $branchId
     * @access public
     */
    public $branchId = null;

    /**
     * @var string $rioId
     * @access public
     */
    public $rioId = null;

    /**
     * @var boolean $hasPublicAccess
     * @access public
     */
    public $hasPublicAccess = null;

    /**
     * @var boolean $isStandalone
     * @access public
     */
    public $isStandalone = null;

    /**
     * @var string $pfaPlace
     * @access public
     */
    public $pfaPlace = null;

    /**
     * @var boolean $hasDeliveryFunction
     * @access public
     */
    public $hasDeliveryFunction = null;

    /**
     * @var string $zipOfPfa
     * @access public
     */
    public $zipOfPfa = null;

    /**
     * @var int $numberPfLocker
     * @access public
     */
    public $numberPfLocker = null;

    /**
     * @var int $numberPf
     * @access public
     */
    public $numberPf = null;

    /**
     * @var int $numberReservedPf
     * @access public
     */
    public $numberReservedPf = null;

    /**
     * @var int $pfLockerNrFrom
     * @access public
     */
    public $pfLockerNrFrom = null;

    /**
     * @var int $pfLockerNrTo
     * @access public
     */
    public $pfLockerNrTo = null;

    /**
     * @var int $pfNrFrom
     * @access public
     */
    public $pfNrFrom = null;

    /**
     * @var int $pfNrTo
     * @access public
     */
    public $pfNrTo = null;

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
     * @var int $pfaId
     * @access public
     */
    public $pfaId = null;

    /**
     * @param int $branchId
     * @param string $rioId
     * @param boolean $hasPublicAccess
     * @param boolean $isStandalone
     * @param string $pfaPlace
     * @param boolean $hasDeliveryFunction
     * @param string $zipOfPfa
     * @param int $numberPfLocker
     * @param int $numberPf
     * @param int $numberReservedPf
     * @param int $pfLockerNrFrom
     * @param int $pfLockerNrTo
     * @param int $pfNrFrom
     * @param int $pfNrTo
     * @param address $address
     * @param locationWithDistance $location
     * @param branch $branch
     * @param timeinfos $timeinfos
     * @param int $id
     * @param int $pfaId
     * @access public
     */
    public function __construct($branchId, $rioId, $hasPublicAccess, $isStandalone, $pfaPlace, $hasDeliveryFunction, $zipOfPfa, $numberPfLocker, $numberPf, $numberReservedPf, $pfLockerNrFrom, $pfLockerNrTo, $pfNrFrom, $pfNrTo, $address, $location, $branch, $timeinfos, $id, $pfaId)
    {
      $this->branchId = $branchId;
      $this->rioId = $rioId;
      $this->hasPublicAccess = $hasPublicAccess;
      $this->isStandalone = $isStandalone;
      $this->pfaPlace = $pfaPlace;
      $this->hasDeliveryFunction = $hasDeliveryFunction;
      $this->zipOfPfa = $zipOfPfa;
      $this->numberPfLocker = $numberPfLocker;
      $this->numberPf = $numberPf;
      $this->numberReservedPf = $numberReservedPf;
      $this->pfLockerNrFrom = $pfLockerNrFrom;
      $this->pfLockerNrTo = $pfLockerNrTo;
      $this->pfNrFrom = $pfNrFrom;
      $this->pfNrTo = $pfNrTo;
      $this->address = $address;
      $this->location = $location;
      $this->branch = $branch;
      $this->timeinfos = $timeinfos;
      $this->id = $id;
      $this->pfaId = $pfaId;
    }

}
