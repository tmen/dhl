<?php

class PickupBookingInformationType
{

    /**
     * @var ProductID $ProductID
     * @access public
     */
    public $ProductID = null;

    /**
     * @var string $Account
     * @access public
     */
    public $Account = null;

    /**
     * @var string $Attendance
     * @access public
     */
    public $Attendance = null;

    /**
     * @var PickupDate $PickupDate
     * @access public
     */
    public $PickupDate = null;

    /**
     * @var ReadyByTime $ReadyByTime
     * @access public
     */
    public $ReadyByTime = null;

    /**
     * @var ClosingTime $ClosingTime
     * @access public
     */
    public $ClosingTime = null;

    /**
     * @var string $Remark
     * @access public
     */
    public $Remark = null;

    /**
     * @var string $PickupLocation
     * @access public
     */
    public $PickupLocation = null;

    /**
     * @var AmountOfPieces $AmountOfPieces
     * @access public
     */
    public $AmountOfPieces = null;

    /**
     * @var AmountOfPallets $AmountOfPallets
     * @access public
     */
    public $AmountOfPallets = null;

    /**
     * @var WeightInKG $WeightInKG
     * @access public
     */
    public $WeightInKG = null;

    /**
     * @var CountOfShipments $CountOfShipments
     * @access public
     */
    public $CountOfShipments = null;

    /**
     * @var TotalVolumeWeight $TotalVolumeWeight
     * @access public
     */
    public $TotalVolumeWeight = null;

    /**
     * @var MaxLengthInCM $MaxLengthInCM
     * @access public
     */
    public $MaxLengthInCM = null;

    /**
     * @var MaxWidthInCM $MaxWidthInCM
     * @access public
     */
    public $MaxWidthInCM = null;

    /**
     * @var MaxHeightInCM $MaxHeightInCM
     * @access public
     */
    public $MaxHeightInCM = null;

    /**
     * @param ProductID $ProductID
     * @param string $Account
     * @param string $Attendance
     * @param PickupDate $PickupDate
     * @param ReadyByTime $ReadyByTime
     * @param ClosingTime $ClosingTime
     * @param string $Remark
     * @param string $PickupLocation
     * @param AmountOfPieces $AmountOfPieces
     * @param AmountOfPallets $AmountOfPallets
     * @param WeightInKG $WeightInKG
     * @param CountOfShipments $CountOfShipments
     * @param TotalVolumeWeight $TotalVolumeWeight
     * @param MaxLengthInCM $MaxLengthInCM
     * @param MaxWidthInCM $MaxWidthInCM
     * @param MaxHeightInCM $MaxHeightInCM
     * @access public
     */
    public function __construct($ProductID, $Account, $Attendance, $PickupDate, $ReadyByTime, $ClosingTime, $Remark, $PickupLocation, $AmountOfPieces, $AmountOfPallets, $WeightInKG, $CountOfShipments, $TotalVolumeWeight, $MaxLengthInCM, $MaxWidthInCM, $MaxHeightInCM)
    {
      $this->ProductID = $ProductID;
      $this->Account = $Account;
      $this->Attendance = $Attendance;
      $this->PickupDate = $PickupDate;
      $this->ReadyByTime = $ReadyByTime;
      $this->ClosingTime = $ClosingTime;
      $this->Remark = $Remark;
      $this->PickupLocation = $PickupLocation;
      $this->AmountOfPieces = $AmountOfPieces;
      $this->AmountOfPallets = $AmountOfPallets;
      $this->WeightInKG = $WeightInKG;
      $this->CountOfShipments = $CountOfShipments;
      $this->TotalVolumeWeight = $TotalVolumeWeight;
      $this->MaxLengthInCM = $MaxLengthInCM;
      $this->MaxWidthInCM = $MaxWidthInCM;
      $this->MaxHeightInCM = $MaxHeightInCM;
    }

}
