<?php

include_once('getPackstationsPaketboxesByCoordinate.php');
include_once('location.php');
include_once('getPackstationsPaketboxesByCoordinateResponse.php');
include_once('automatWS.php');
include_once('timeinfos.php');
include_once('address.php');
include_once('locationWithDistance.php');
include_once('branch.php');
include_once('serviceTypes.php');
include_once('automats.php');
include_once('poboxes.php');
include_once('servicesAddition.php');
include_once('pobox.php');
include_once('timeinfo.php');
include_once('getBranchesByCoordinate.php');
include_once('inputTimeinfo.php');
include_once('getBranchesByCoordinateResponse.php');
include_once('getPackstationsByCoordinate.php');
include_once('getPackstationsByCoordinateResponse.php');
include_once('getPackstationsByAddress.php');
include_once('inputAddress.php');
include_once('getPackstationsByAddressResponse.php');
include_once('ServiceException.php');
include_once('throwable.php');
include_once('stackTraceElement.php');
include_once('getPackstationsFilialeDirektByCoordinate.php');
include_once('getPackstationsFilialeDirektByCoordinateResponse.php');
include_once('automatFD.php');
include_once('getPackstationsFilialeDirektByAddress.php');
include_once('getPackstationsFilialeDirektByAddressResponse.php');
include_once('getPaketboxesByCoordinate.php');
include_once('getPaketboxesByCoordinateResponse.php');
include_once('getPaketboxesByAddress.php');
include_once('getPaketboxesByAddressResponse.php');
include_once('getBranchesByAddress.php');
include_once('getBranchesByAddressResponse.php');
include_once('getPackstationsPaketboxesByAddress.php');
include_once('getPackstationsPaketboxesByAddressResponse.php');

class WebServiceImplService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'getPackstationsPaketboxesByCoordinate' => '\getPackstationsPaketboxesByCoordinate',
      'location' => '\location',
      'getPackstationsPaketboxesByCoordinateResponse' => '\getPackstationsPaketboxesByCoordinateResponse',
      'automatWS' => '\automatWS',
      'timeinfos' => '\timeinfos',
      'address' => '\address',
      'locationWithDistance' => '\locationWithDistance',
      'branch' => '\branch',
      'serviceTypes' => '\serviceTypes',
      'automats' => '\automats',
      'poboxes' => '\poboxes',
      'servicesAddition' => '\servicesAddition',
      'pobox' => '\pobox',
      'timeinfo' => '\timeinfo',
      'getBranchesByCoordinate' => '\getBranchesByCoordinate',
      'inputTimeinfo' => '\inputTimeinfo',
      'getBranchesByCoordinateResponse' => '\getBranchesByCoordinateResponse',
      'getPackstationsByCoordinate' => '\getPackstationsByCoordinate',
      'getPackstationsByCoordinateResponse' => '\getPackstationsByCoordinateResponse',
      'getPackstationsByAddress' => '\getPackstationsByAddress',
      'inputAddress' => '\inputAddress',
      'getPackstationsByAddressResponse' => '\getPackstationsByAddressResponse',
      'ServiceException' => '\ServiceException',
      'throwable' => '\throwable',
      'stackTraceElement' => '\stackTraceElement',
      'getPackstationsFilialeDirektByCoordinate' => '\getPackstationsFilialeDirektByCoordinate',
      'getPackstationsFilialeDirektByCoordinateResponse' => '\getPackstationsFilialeDirektByCoordinateResponse',
      'automatFD' => '\automatFD',
      'getPackstationsFilialeDirektByAddress' => '\getPackstationsFilialeDirektByAddress',
      'getPackstationsFilialeDirektByAddressResponse' => '\getPackstationsFilialeDirektByAddressResponse',
      'getPaketboxesByCoordinate' => '\getPaketboxesByCoordinate',
      'getPaketboxesByCoordinateResponse' => '\getPaketboxesByCoordinateResponse',
      'getPaketboxesByAddress' => '\getPaketboxesByAddress',
      'getPaketboxesByAddressResponse' => '\getPaketboxesByAddressResponse',
      'getBranchesByAddress' => '\getBranchesByAddress',
      'getBranchesByAddressResponse' => '\getBranchesByAddressResponse',
      'getPackstationsPaketboxesByAddress' => '\getPackstationsPaketboxesByAddress',
      'getPackstationsPaketboxesByAddressResponse' => '\getPackstationsPaketboxesByAddressResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'C:\WT-NMP\tmp\standortsuche-api-1.0.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param getPackstationsByAddress $parameters
     * @access public
     * @return getPackstationsByAddressResponse
     */
    public function getPackstationsByAddress(getPackstationsByAddress $parameters)
    {
      return $this->__soapCall('getPackstationsByAddress', array($parameters));
    }

    /**
     * @param getPackstationsPaketboxesByAddress $parameters
     * @access public
     * @return getPackstationsPaketboxesByAddressResponse
     */
    public function getPackstationsPaketboxesByAddress(getPackstationsPaketboxesByAddress $parameters)
    {
      return $this->__soapCall('getPackstationsPaketboxesByAddress', array($parameters));
    }

    /**
     * @param getPaketboxesByAddress $parameters
     * @access public
     * @return getPaketboxesByAddressResponse
     */
    public function getPaketboxesByAddress(getPaketboxesByAddress $parameters)
    {
      return $this->__soapCall('getPaketboxesByAddress', array($parameters));
    }

    /**
     * @param getPackstationsFilialeDirektByAddress $parameters
     * @access public
     * @return getPackstationsFilialeDirektByAddressResponse
     */
    public function getPackstationsFilialeDirektByAddress(getPackstationsFilialeDirektByAddress $parameters)
    {
      return $this->__soapCall('getPackstationsFilialeDirektByAddress', array($parameters));
    }

    /**
     * @param getBranchesByAddress $parameters
     * @access public
     * @return getBranchesByAddressResponse
     */
    public function getBranchesByAddress(getBranchesByAddress $parameters)
    {
      return $this->__soapCall('getBranchesByAddress', array($parameters));
    }

}
