<?php

include_once('Version.php');
include_once('AuthentificationType.php');
include_once('NativeAddressType.php');
include_once('PickupAddressType.php');
include_once('DeliveryAddressType.php');
include_once('BankType.php');
include_once('NameType.php');
include_once('Person.php');
include_once('Company.php');
include_once('CommunicationType.php');
include_once('ContactType.php');
include_once('PackStationType.php');
include_once('PostOfficeType.php');
include_once('CustomerType.php');
include_once('ErrorType.php');
include_once('ZipType.php');
include_once('CountryType.php');
include_once('ShipmentNumberType.php');
include_once('Status.php');
include_once('Dimension.php');
include_once('TimeFrame.php');
include_once('DeveloperAuthentification.php');
include_once('GetVersionResponse.php');
include_once('CreateShipmentTDRequest.php');
include_once('CreateShipmentDDRequest.php');
include_once('CreateShipmentResponse.php');
include_once('GetLabelTDRequest.php');
include_once('GetLabelDDRequest.php');
include_once('GetLabelResponse.php');
include_once('DoManifestTDRequest.php');
include_once('DoManifestDDRequest.php');
include_once('DoManifestResponse.php');
include_once('DeleteShipmentTDRequest.php');
include_once('DeleteShipmentDDRequest.php');
include_once('DeleteShipmentResponse.php');
include_once('GetExportDocTDRequest.php');
include_once('GetExportDocDDRequest.php');
include_once('GetExportDocResponse.php');
include_once('GetManifestDDRequest.php');
include_once('manifestDateRange.php');
include_once('GetManifestDDResponse.php');
include_once('UpdateShipmentDDRequest.php');
include_once('UpdateShipmentResponse.php');
include_once('CreationState.php');
include_once('Statusinformation.php');
include_once('PieceInformation.php');
include_once('ShipmentOrderTDType.php');
include_once('Shipment.php');
include_once('Pickup.php');
include_once('ShipmentOrderDDType.php');
include_once('ShipperType.php');
include_once('ShipperTDType.php');
include_once('ShipperDDType.php');
include_once('ReceiverType.php');
include_once('ReceiverTDType.php');
include_once('ReceiverDDType.php');
include_once('IdentityType.php');
include_once('ShipmentDetailsType.php');
include_once('ShipmentDetailsTDType.php');
include_once('Account.php');
include_once('AccountPaidBy.php');
include_once('ShipmentDetailsDDType.php');
include_once('Attendance.php');
include_once('ShipmentItemType.php');
include_once('ShipmentItemTDType.php');
include_once('ShipmentItemDDType.php');
include_once('ShipmentServiceTD.php');
include_once('TDServiceGroupDateTimeOptionType.php');
include_once('ExpressSaturday.php');
include_once('TDServiceGroupOtherType.php');
include_once('Insurance.php');
include_once('ShipmentServiceDD.php');
include_once('DDServiceGroupDateTimeOptionType.php');
include_once('DeliveryOnTime.php');
include_once('DDShipmentServiceGroupIdentType.php');
include_once('Ident.php');
include_once('IdentExtra.php');
include_once('IdentPremium.php');
include_once('ContractSubmission.php');
include_once('SMSAviso.php');
include_once('CheckMinimumAge.php');
include_once('DDShipmentServiceGroupPickupType.php');
include_once('DDServiceGroupBusinessPackInternationalType.php');
include_once('Endorsement.php');
include_once('DDServiceGroupDHLPaketType.php');
include_once('ShipmentAdvisory.php');
include_once('AdvisoryData.php');
include_once('EndorsementServiceconfiguration.php');
include_once('EndorsementServiceconfigurationTeZu.php');
include_once('DDServiceGroupOtherType.php');
include_once('HigherInsurance.php');
include_once('COD.php');
include_once('Unfree.php');
include_once('DangerousGoods.php');
include_once('Bulkfreight.php');
include_once('ShipmentNotificationType.php');
include_once('ExportDocumentTDType.php');
include_once('ExportDocPosition.php');
include_once('ExportDocumentDDType.php');
include_once('FurtherAddressesDDType.php');
include_once('DeliveryAdress.php');
include_once('LabelData.php');
include_once('ExportDocData.php');
include_once('ManifestState.php');
include_once('DeletionState.php');
include_once('BookPickupRequest.php');
include_once('BookPickupResponse.php');
include_once('PickupDetailsType.php');
include_once('PickupOrdererType.php');
include_once('PickupBookingInformationType.php');
include_once('CancelPickupRequest.php');
include_once('CancelPickupResponse.php');
include_once('IdentityData.php');
include_once('DrivingLicense.php');
include_once('IdentityCard.php');
include_once('BankCard.php');
include_once('PackstationType.php');
include_once('PostfilialeType.php');

class ISService_1_0_de extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'Version' => '\Version',
      'AuthentificationType' => '\AuthentificationType',
      'NativeAddressType' => '\NativeAddressType',
      'PickupAddressType' => '\PickupAddressType',
      'DeliveryAddressType' => '\DeliveryAddressType',
      'BankType' => '\BankType',
      'NameType' => '\NameType',
      'Person' => '\Person',
      'Company' => '\Company',
      'CommunicationType' => '\CommunicationType',
      'ContactType' => '\ContactType',
      'PackStationType' => '\PackStationType',
      'PostOfficeType' => '\PostOfficeType',
      'CustomerType' => '\CustomerType',
      'ErrorType' => '\ErrorType',
      'ZipType' => '\ZipType',
      'CountryType' => '\CountryType',
      'ShipmentNumberType' => '\ShipmentNumberType',
      'Status' => '\Status',
      'Dimension' => '\Dimension',
      'TimeFrame' => '\TimeFrame',
      'DeveloperAuthentification' => '\DeveloperAuthentification',
      'GetVersionResponse' => '\GetVersionResponse',
      'CreateShipmentTDRequest' => '\CreateShipmentTDRequest',
      'CreateShipmentDDRequest' => '\CreateShipmentDDRequest',
      'CreateShipmentResponse' => '\CreateShipmentResponse',
      'GetLabelTDRequest' => '\GetLabelTDRequest',
      'GetLabelDDRequest' => '\GetLabelDDRequest',
      'GetLabelResponse' => '\GetLabelResponse',
      'DoManifestTDRequest' => '\DoManifestTDRequest',
      'DoManifestDDRequest' => '\DoManifestDDRequest',
      'DoManifestResponse' => '\DoManifestResponse',
      'DeleteShipmentTDRequest' => '\DeleteShipmentTDRequest',
      'DeleteShipmentDDRequest' => '\DeleteShipmentDDRequest',
      'DeleteShipmentResponse' => '\DeleteShipmentResponse',
      'GetExportDocTDRequest' => '\GetExportDocTDRequest',
      'GetExportDocDDRequest' => '\GetExportDocDDRequest',
      'GetExportDocResponse' => '\GetExportDocResponse',
      'GetManifestDDRequest' => '\GetManifestDDRequest',
      'manifestDateRange' => '\manifestDateRange',
      'GetManifestDDResponse' => '\GetManifestDDResponse',
      'UpdateShipmentDDRequest' => '\UpdateShipmentDDRequest',
      'UpdateShipmentResponse' => '\UpdateShipmentResponse',
      'CreationState' => '\CreationState',
      'Statusinformation' => '\Statusinformation',
      'PieceInformation' => '\PieceInformation',
      'ShipmentOrderTDType' => '\ShipmentOrderTDType',
      'Shipment' => '\Shipment',
      'Pickup' => '\Pickup',
      'ShipmentOrderDDType' => '\ShipmentOrderDDType',
      'ShipperType' => '\ShipperType',
      'ShipperTDType' => '\ShipperTDType',
      'ShipperDDType' => '\ShipperDDType',
      'ReceiverType' => '\ReceiverType',
      'ReceiverTDType' => '\ReceiverTDType',
      'ReceiverDDType' => '\ReceiverDDType',
      'IdentityType' => '\IdentityType',
      'ShipmentDetailsType' => '\ShipmentDetailsType',
      'ShipmentDetailsTDType' => '\ShipmentDetailsTDType',
      'Account' => '\Account',
      'AccountPaidBy' => '\AccountPaidBy',
      'ShipmentDetailsDDType' => '\ShipmentDetailsDDType',
      'Attendance' => '\Attendance',
      'ShipmentItemType' => '\ShipmentItemType',
      'ShipmentItemTDType' => '\ShipmentItemTDType',
      'ShipmentItemDDType' => '\ShipmentItemDDType',
      'ShipmentServiceTD' => '\ShipmentServiceTD',
      'TDServiceGroupDateTimeOptionType' => '\TDServiceGroupDateTimeOptionType',
      'ExpressSaturday' => '\ExpressSaturday',
      'TDServiceGroupOtherType' => '\TDServiceGroupOtherType',
      'Insurance' => '\Insurance',
      'ShipmentServiceDD' => '\ShipmentServiceDD',
      'DDServiceGroupDateTimeOptionType' => '\DDServiceGroupDateTimeOptionType',
      'DeliveryOnTime' => '\DeliveryOnTime',
      'DDShipmentServiceGroupIdentType' => '\DDShipmentServiceGroupIdentType',
      'Ident' => '\Ident',
      'IdentExtra' => '\IdentExtra',
      'IdentPremium' => '\IdentPremium',
      'ContractSubmission' => '\ContractSubmission',
      'SMSAviso' => '\SMSAviso',
      'CheckMinimumAge' => '\CheckMinimumAge',
      'DDShipmentServiceGroupPickupType' => '\DDShipmentServiceGroupPickupType',
      'DDServiceGroupBusinessPackInternationalType' => '\DDServiceGroupBusinessPackInternationalType',
      'Endorsement' => '\Endorsement',
      'DDServiceGroupDHLPaketType' => '\DDServiceGroupDHLPaketType',
      'ShipmentAdvisory' => '\ShipmentAdvisory',
      'AdvisoryData' => '\AdvisoryData',
      'EndorsementServiceconfiguration' => '\EndorsementServiceconfiguration',
      'EndorsementServiceconfigurationTeZu' => '\EndorsementServiceconfigurationTeZu',
      'DDServiceGroupOtherType' => '\DDServiceGroupOtherType',
      'HigherInsurance' => '\HigherInsurance',
      'COD' => '\COD',
      'Unfree' => '\Unfree',
      'DangerousGoods' => '\DangerousGoods',
      'Bulkfreight' => '\Bulkfreight',
      'ShipmentNotificationType' => '\ShipmentNotificationType',
      'ExportDocumentTDType' => '\ExportDocumentTDType',
      'ExportDocPosition' => '\ExportDocPosition',
      'ExportDocumentDDType' => '\ExportDocumentDDType',
      'FurtherAddressesDDType' => '\FurtherAddressesDDType',
      'DeliveryAdress' => '\DeliveryAdress',
      'LabelData' => '\LabelData',
      'ExportDocData' => '\ExportDocData',
      'ManifestState' => '\ManifestState',
      'DeletionState' => '\DeletionState',
      'BookPickupRequest' => '\BookPickupRequest',
      'BookPickupResponse' => '\BookPickupResponse',
      'PickupDetailsType' => '\PickupDetailsType',
      'PickupOrdererType' => '\PickupOrdererType',
      'PickupBookingInformationType' => '\PickupBookingInformationType',
      'CancelPickupRequest' => '\CancelPickupRequest',
      'CancelPickupResponse' => '\CancelPickupResponse',
      'IdentityData' => '\IdentityData',
      'DrivingLicense' => '\DrivingLicense',
      'IdentityCard' => '\IdentityCard',
      'BankCard' => '\BankCard',
      'PackstationType' => '\PackstationType',
      'PostfilialeType' => '\PostfilialeType');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'C:\WT-NMP\tmp\geschaeftskundenversand-api-1.0.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * Creates TD shipments.
     *
     * @param CreateShipmentTDRequest $part1
     * @access public
     * @return CreateShipmentResponse
     */
    public function createShipmentTD(CreateShipmentTDRequest $part1)
    {
      return $this->__soapCall('createShipmentTD', array($part1));
    }

    /**
     * Creates DD shipments.
     *
     * @param CreateShipmentDDRequest $part1
     * @access public
     * @return CreateShipmentResponse
     */
    public function createShipmentDD(CreateShipmentDDRequest $part1)
    {
      return $this->__soapCall('createShipmentDD', array($part1));
    }

    /**
     * Deletes the requested TD shipments.
     *
     * @param DeleteShipmentTDRequest $part1
     * @access public
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentTD(DeleteShipmentTDRequest $part1)
    {
      return $this->__soapCall('deleteShipmentTD', array($part1));
    }

    /**
     * Deletes the requested DD shipments.
     *
     * @param DeleteShipmentDDRequest $part1
     * @access public
     * @return DeleteShipmentResponse
     */
    public function deleteShipmentDD(DeleteShipmentDDRequest $part1)
    {
      return $this->__soapCall('deleteShipmentDD', array($part1));
    }

    /**
     * Manifest the requested TD shipments.
     *
     * @param DoManifestTDRequest $part1
     * @access public
     * @return DoManifestResponse
     */
    public function doManifestTD(DoManifestTDRequest $part1)
    {
      return $this->__soapCall('doManifestTD', array($part1));
    }

    /**
     * Manifest the requested DD shipments.
     *
     * @param DoManifestDDRequest $part1
     * @access public
     * @return DoManifestResponse
     */
    public function doManifestDD(DoManifestDDRequest $part1)
    {
      return $this->__soapCall('doManifestDD', array($part1));
    }

    /**
     * Returns the request-url for getting a TD label.
     *
     * @param GetLabelTDRequest $part1
     * @access public
     * @return GetLabelResponse
     */
    public function getLabelTD(GetLabelTDRequest $part1)
    {
      return $this->__soapCall('getLabelTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD label.
     *
     * @param GetLabelDDRequest $part1
     * @access public
     * @return GetLabelResponse
     */
    public function getLabelDD(GetLabelDDRequest $part1)
    {
      return $this->__soapCall('getLabelDD', array($part1));
    }

    /**
     * Books a pickup order.
     *
     * @param BookPickupRequest $part1
     * @access public
     * @return BookPickupResponse
     */
    public function bookPickup(BookPickupRequest $part1)
    {
      return $this->__soapCall('bookPickup', array($part1));
    }

    /**
     * Cancels a pickup order.
     *
     * @param CancelPickupRequest $part1
     * @access public
     * @return CancelPickupResponse
     */
    public function cancelPickup(CancelPickupRequest $part1)
    {
      return $this->__soapCall('cancelPickup', array($part1));
    }

    /**
     * Returns the actual version of the implementation of the whole ISService webservice.
     *
     * @param Version $part1
     * @access public
     * @return GetVersionResponse
     */
    public function getVersion(Version $part1)
    {
      return $this->__soapCall('getVersion', array($part1));
    }

    /**
     * Returns the request-url for getting a TD export document.
     *
     * @param GetExportDocTDRequest $part1
     * @access public
     * @return GetExportDocResponse
     */
    public function getExportDocTD(GetExportDocTDRequest $part1)
    {
      return $this->__soapCall('getExportDocTD', array($part1));
    }

    /**
     * Returns the request-url for getting a DD  export document.
     *
     * @param GetExportDocDDRequest $part1
     * @access public
     * @return GetExportDocResponse
     */
    public function getExportDocDD(GetExportDocDDRequest $part1)
    {
      return $this->__soapCall('getExportDocDD', array($part1));
    }

    /**
     * Request the manifest.
     *
     * @param GetManifestDDRequest $part1
     * @access public
     * @return GetManifestDDResponse
     */
    public function getManifestDD(GetManifestDDRequest $part1)
    {
      return $this->__soapCall('getManifestDD', array($part1));
    }

    /**
     * Updates a DD shipment.
     *
     * @param UpdateShipmentDDRequest $part1
     * @access public
     * @return UpdateShipmentResponse
     */
    public function updateShipmentDD(UpdateShipmentDDRequest $part1)
    {
      return $this->__soapCall('updateShipmentDD', array($part1));
    }

}
