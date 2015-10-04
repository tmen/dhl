<?php

class branch
{

    /**
     * @var string $denotation
     * @access public
     */
    public $denotation = null;

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
     * @var int $distance
     * @access public
     */
    public $distance = null;

    /**
     * @var string $typeIPC
     * @access public
     */
    public $typeIPC = null;

    /**
     * @var string $nameIPC
     * @access public
     */
    public $nameIPC = null;

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
     * @var serviceTypes $serviceTypes
     * @access public
     */
    public $serviceTypes = null;

    /**
     * @var automats $automats
     * @access public
     */
    public $automats = null;

    /**
     * @var poboxes $poboxes
     * @access public
     */
    public $poboxes = null;

    /**
     * @var timeinfos $timeinfos
     * @access public
     */
    public $timeinfos = null;

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
     * @param string $denotation
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
     * @param int $distance
     * @param string $typeIPC
     * @param string $nameIPC
     * @param address $address
     * @param locationWithDistance $location
     * @param serviceTypes $serviceTypes
     * @param automats $automats
     * @param poboxes $poboxes
     * @param timeinfos $timeinfos
     * @param servicesAddition $servicesAddition
     * @param int $id
     * @access public
     */
    public function __construct($denotation, $branchType, $branchTypeOz, $branchTypePF, $hasNewService, $hasBankingService, $hasFinanceService, $hasPobox, $hasDhlExprIntern, $hasCargoAcceptance, $hasHandicappedAccess, $hasParkingArea, $hasCertificate, $sellsPostbusTickets, $openingEquals, $numFinanceCounsels, $depotServiceNo, $depotServiceOeffentlich, $website, $externalMarker, $distance, $typeIPC, $nameIPC, $address, $location, $serviceTypes, $automats, $poboxes, $timeinfos, $servicesAddition, $id)
    {
      $this->denotation = $denotation;
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
      $this->distance = $distance;
      $this->typeIPC = $typeIPC;
      $this->nameIPC = $nameIPC;
      $this->address = $address;
      $this->location = $location;
      $this->serviceTypes = $serviceTypes;
      $this->automats = $automats;
      $this->poboxes = $poboxes;
      $this->timeinfos = $timeinfos;
      $this->servicesAddition = $servicesAddition;
      $this->id = $id;
    }

}
