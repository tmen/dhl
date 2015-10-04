<?php

include_once('ShipmentDetailsType.php');

class ShipmentDetailsTDType extends ShipmentDetailsType
{

    /**
     * @var Account $Account
     * @access public
     */
    public $Account = null;

    /**
     * @var Dutiable $Dutiable
     * @access public
     */
    public $Dutiable = null;

    /**
     * @var string $DescriptionOfContent
     * @access public
     */
    public $DescriptionOfContent = null;

    /**
     * @var AccountPaidBy $AccountPaidBy
     * @access public
     */
    public $AccountPaidBy = null;

    /**
     * @var string $ShipmentReference
     * @access public
     */
    public $ShipmentReference = null;

    /**
     * @var string $TermsOfTrade
     * @access public
     */
    public $TermsOfTrade = null;

    /**
     * @var ShipmentItemTDType $ShipmentItem
     * @access public
     */
    public $ShipmentItem = null;

    /**
     * @var ShipmentServiceTD $Service
     * @access public
     */
    public $Service = null;

    /**
     * @var ShipmentNotificationType $Notification
     * @access public
     */
    public $Notification = null;

    /**
     * @var string $NotificationEmailText
     * @access public
     */
    public $NotificationEmailText = null;

    /**
     * @param string $ProductCode
     * @param ShipmentDate $ShipmentDate
     * @param DeclaredValueOfGoods $DeclaredValueOfGoods
     * @param string $DeclaredValueOfGoodsCurrency
     * @param Account $Account
     * @param Dutiable $Dutiable
     * @param string $DescriptionOfContent
     * @param AccountPaidBy $AccountPaidBy
     * @param string $ShipmentReference
     * @param string $TermsOfTrade
     * @param ShipmentItemTDType $ShipmentItem
     * @param ShipmentServiceTD $Service
     * @param ShipmentNotificationType $Notification
     * @param string $NotificationEmailText
     * @access public
     */
    public function __construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency, $Account, $Dutiable, $DescriptionOfContent, $AccountPaidBy, $ShipmentReference, $TermsOfTrade, $ShipmentItem, $Service, $Notification, $NotificationEmailText)
    {
      parent::__construct($ProductCode, $ShipmentDate, $DeclaredValueOfGoods, $DeclaredValueOfGoodsCurrency);
      $this->Account = $Account;
      $this->Dutiable = $Dutiable;
      $this->DescriptionOfContent = $DescriptionOfContent;
      $this->AccountPaidBy = $AccountPaidBy;
      $this->ShipmentReference = $ShipmentReference;
      $this->TermsOfTrade = $TermsOfTrade;
      $this->ShipmentItem = $ShipmentItem;
      $this->Service = $Service;
      $this->Notification = $Notification;
      $this->NotificationEmailText = $NotificationEmailText;
    }

}
