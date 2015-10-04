<?php

class automatFD
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
     * @var timeinfos $timeinfos
     * @access public
     */
    public $timeinfos = null;

    /**
     * @var int $branchType
     * @access public
     */
    public $branchType = null;

    /**
     * @var int $branchTypeOz
     * @access public
     */
    public $branchTypeOz = null;

    /**
     * @var string $branchTypePF
     * @access public
     */
    public $branchTypePF = null;

    /**
     * @var boolean $hasNewService
     * @access public
     */
    public $hasNewService = null;

    /**
     * @var int $hasBankingService
     * @access public
     */
    public $hasBankingService = null;

    /**
     * @var boolean $hasFinanceService
     * @access public
     */
    public $hasFinanceService = null;

    /**
     * @var boolean $hasPobox
     * @access public
     */
    public $hasPobox = null;

    /**
     * @var boolean $hasDhlExprIntern
     * @access public
     */
    public $hasDhlExprIntern = null;

    /**
     * @var boolean $hasCargoAcceptance
     * @access public
     */
    public $hasCargoAcceptance = null;

    /**
     * @var boolean $hasHandicappedAccess
     * @access public
     */
    public $hasHandicappedAccess = null;

    /**
     * @var boolean $hasParkingArea
     * @access public
     */
    public $hasParkingArea = null;

    /**
     * @var boolean $hasCertificate
     * @access public
     */
    public $hasCertificate = null;

    /**
     * @var boolean $sellsPostbusTickets
     * @access public
     */
    public $sellsPostbusTickets = null;

    /**
     * @var boolean $openingEquals
     * @access public
     */
    public $openingEquals = null;

    /**
     * @var float $numFinanceCounsels
     * @access public
     */
    public $numFinanceCounsels = null;

    /**
     * @var string $depotServiceNo
     * @access public
     */
    public $depotServiceNo = null;

    /**
     * @var boolean $depotServiceOeffentlich
     * @access public
     */
    public $depotServiceOeffentlich = null;

    /**
     * @var string $website
     * @access public
     */
    public $website = null;

    /**
     * @var string $externalMarker
     * @access public
     */
    public $externalMarker = null;

    /**
     * @var serviceTypes $serviceTypes
     * @access public
     */
    public $serviceTypes = null;

    /**
     * @var poboxes $poboxes
     * @access public
     */
    public $poboxes = null;

    /**
     * @var servicesAddition $servicesAddition
     * @access public
     */
    public $servicesAddition = null;

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
     * @param timeinfos $timeinfos
     * @param int $branchType
     * @param int $branchTypeOz
     * @param string $branchTypePF
     * @param boolean $hasNewService
     * @param int $hasBankingService
     * @param boolean $hasFinanceService
     * @param boolean $hasPobox
     * @param boolean $hasDhlExprIntern
     * @param boolean $hasCargoAcceptance
     * @param boolean $hasHandicappedAccess
     * @param boolean $hasParkingArea
     * @param boolean $hasCertificate
     * @param boolean $sellsPostbusTickets
     * @param boolean $openingEquals
     * @param float $numFinanceCounsels
     * @param string $depotServiceNo
     * @param boolean $depotServiceOeffentlich
     * @param string $website
     * @param string $externalMarker
     * @param serviceTypes $serviceTypes
     * @param poboxes $poboxes
     * @param servicesAddition $servicesAddition
     * @param int $id
     * @param int $objectId
     * @param int $packstationId
     * @access public
     */
    public function __construct($automatType, $positionType, $opStatusType, $hasXLPostfach, $distance, $address, $location, $timeinfos, $branchType, $branchTypeOz, $branchTypePF, $hasNewService, $hasBankingService, $hasFinanceService, $hasPobox, $hasDhlExprIntern, $hasCargoAcceptance, $hasHandicappedAccess, $hasParkingArea, $hasCertificate, $sellsPostbusTickets, $openingEquals, $numFinanceCounsels, $depotServiceNo, $depotServiceOeffentlich, $website, $externalMarker, $serviceTypes, $poboxes, $servicesAddition, $id, $objectId, $packstationId)
    {
      $this->automatType = $automatType;
      $this->positionType = $positionType;
      $this->opStatusType = $opStatusType;
      $this->hasXLPostfach = $hasXLPostfach;
      $this->distance = $distance;
      $this->address = $address;
      $this->location = $location;
      $this->timeinfos = $timeinfos;
      $this->branchType = $branchType;
      $this->branchTypeOz = $branchTypeOz;
      $this->branchTypePF = $branchTypePF;
      $this->hasNewService = $hasNewService;
      $this->hasBankingService = $hasBankingService;
      $this->hasFinanceService = $hasFinanceService;
      $this->hasPobox = $hasPobox;
      $this->hasDhlExprIntern = $hasDhlExprIntern;
      $this->hasCargoAcceptance = $hasCargoAcceptance;
      $this->hasHandicappedAccess = $hasHandicappedAccess;
      $this->hasParkingArea = $hasParkingArea;
      $this->hasCertificate = $hasCertificate;
      $this->sellsPostbusTickets = $sellsPostbusTickets;
      $this->openingEquals = $openingEquals;
      $this->numFinanceCounsels = $numFinanceCounsels;
      $this->depotServiceNo = $depotServiceNo;
      $this->depotServiceOeffentlich = $depotServiceOeffentlich;
      $this->website = $website;
      $this->externalMarker = $externalMarker;
      $this->serviceTypes = $serviceTypes;
      $this->poboxes = $poboxes;
      $this->servicesAddition = $servicesAddition;
      $this->id = $id;
      $this->objectId = $objectId;
      $this->packstationId = $packstationId;
    }

}
