<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use \SoapClient;
use \SoapHeader;
use \SoapFault;

class PopPartnerService extends SoapClient {
	/**
     * @var bool $_debug
     * @access private
     */
    private $_debug = false;

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'ShipmentDimensionType' => 'Tmende\Dhl\Api\Shipping\Personal\ShipmentDimensionType',
      'PriceComponentType' => 'Tmende\Dhl\Api\Shipping\Personal\PriceComponentType',
      'MapType' => 'Tmende\Dhl\Api\Shipping\Personal\MapType',
      'MapEntryType' => 'Tmende\Dhl\Api\Shipping\Personal\MapEntryType',
      'CouponSetInfoType' => 'Tmende\Dhl\Api\Shipping\Personal\CouponSetInfoType',
      'CouponInfoType' => 'Tmende\Dhl\Api\Shipping\Personal\CouponInfoType',
      'CouponSetChunkInfoType' => 'Tmende\Dhl\Api\Shipping\Personal\CouponSetChunkInfoType',
      'BaseLabelAddressType' => 'Tmende\Dhl\Api\Shipping\Personal\BaseLabelAddressType',
      'ShipmentItemType' => 'Tmende\Dhl\Api\Shipping\Personal\ShipmentItemType',
      'ShoppingCartBaseType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartBaseType',
      'LabelItemType' => 'Tmende\Dhl\Api\Shipping\Personal\LabelItemType',
      'ItemType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemType',
      'CouponSetItemType' => 'Tmende\Dhl\Api\Shipping\Personal\CouponSetItemType',
      'PickupItemType' => 'Tmende\Dhl\Api\Shipping\Personal\PickupItemType',
      'MTItemType' => 'Tmende\Dhl\Api\Shipping\Personal\MTItemType',
      'Cn22Type' => 'Tmende\Dhl\Api\Shipping\Personal\Cn22Type',
      'Cn2223LineType' => 'Tmende\Dhl\Api\Shipping\Personal\Cn2223LineType',
      'ItemErrorType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemErrorType',
      'ItemBaseType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemBaseType',
      'ItemErrorsType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemErrorsType',
      'ItemPriceType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemPriceType',
      'PaymentForwardShoppingCartType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentForwardShoppingCartType',
      'DownloadShoppingCartType' => 'Tmende\Dhl\Api\Shipping\Personal\DownloadShoppingCartType',
      'BuyShoppingCartType' => 'Tmende\Dhl\Api\Shipping\Personal\BuyShoppingCartType',
      'PaymentBaseType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentBaseType',
      'PaymentGiropayType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentGiropayType',
      'PaymentCreditcardType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentCreditcardType',
      'PaymentPaypalType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentPaypalType',
      'PaymentNullpayType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentNullpayType',
      'PaymentDHLCheckoutType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentDHLCheckoutType',
      'PaymentPostpayType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentPostpayType',
      'PaymentPartnerpayType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentPartnerpayType',
      'ShoppingCartIdentificationType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartIdentificationType',
      'PickupTimeType' => 'Tmende\Dhl\Api\Shipping\Personal\PickupTimeType',
      'PaymentInfoType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentInfoType',
      'PaymentResultType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentResultType',
      'PaymentResultsType' => 'Tmende\Dhl\Api\Shipping\Personal\PaymentResultsType',
      'PartnerBackLinksType' => 'Tmende\Dhl\Api\Shipping\Personal\PartnerBackLinksType',
      'DirectLabelType' => 'Tmende\Dhl\Api\Shipping\Personal\DirectLabelType',
      'Base64LabelType' => 'Tmende\Dhl\Api\Shipping\Personal\Base64LabelType',
      'WsRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\WsRequestType',
      'WsResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\WsResponseType',
      'ShoppingCartValidateResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartValidateResponseType',
      'ShoppingCartValidateRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartValidateRequestType',
      'ShoppingCartCheckoutBaseRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartCheckoutBaseRequestType',
      'LoadBuyedShoppingCartRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\LoadBuyedShoppingCartRequestType',
      'LoadBuyedShoppingCartResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\LoadBuyedShoppingCartResponseType',
      'AuthType' => 'Tmende\Dhl\Api\Shipping\Personal\AuthType',
      'WsResponseStatus' => 'Tmende\Dhl\Api\Shipping\Personal\WsResponseStatus',
      'ShoppingCartCheckoutViaPaymentRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartCheckoutViaPaymentRequestType',
      'ShoppingCartCheckoutViaPaymentResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartCheckoutViaPaymentResponseType',
      'DirectLabelInfoType' => 'Tmende\Dhl\Api\Shipping\Personal\DirectLabelInfoType',
      'ShoppingCartIdentificationTypeV1M1' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartIdentificationTypeV1M1',
      'MTItemMulticollieType' => 'Tmende\Dhl\Api\Shipping\Personal\MTItemMulticollieType',
      'MTCollie' => 'Tmende\Dhl\Api\Shipping\Personal\MTCollie',
      'ShoppingCartOpenRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartOpenRequestType',
      'ShoppingCartOpenResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\ShoppingCartOpenResponseType',
      'PositionsType' => 'Tmende\Dhl\Api\Shipping\Personal\PositionsType',
      'ItemCancelErrorType' => 'Tmende\Dhl\Api\Shipping\Personal\ItemCancelErrorType',
      'ProductInfoRequestType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductInfoRequestType',
      'ProductInfoResponseType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductInfoResponseType',
      'ProductInfoFilterType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductInfoFilterType',
      'MarketplaceProductsType' => 'Tmende\Dhl\Api\Shipping\Personal\MarketplaceProductsType',
      'ProductGroupType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductGroupType',
      'CountryProductsType' => 'Tmende\Dhl\Api\Shipping\Personal\CountryProductsType',
      'BaseProductType' => 'Tmende\Dhl\Api\Shipping\Personal\BaseProductType',
      'PricesType' => 'Tmende\Dhl\Api\Shipping\Personal\PricesType',
      'BaseProductDescType' => 'Tmende\Dhl\Api\Shipping\Personal\BaseProductDescType',
      'ProductType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductType',
      'ProductDescType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductDescType',
      'PriceType' => 'Tmende\Dhl\Api\Shipping\Personal\PriceType',
      'ReferenceType' => 'Tmende\Dhl\Api\Shipping\Personal\ReferenceType',
      'NamedReferenceType' => 'Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType',
      'ServiceType' => 'Tmende\Dhl\Api\Shipping\Personal\ServiceType',
      'ServiceDescType' => 'Tmende\Dhl\Api\Shipping\Personal\ServiceDescType',
      'ProductServiceDescBaseType' => 'Tmende\Dhl\Api\Shipping\Personal\ProductServiceDescBaseType',
      'CollectionType' => 'Tmende\Dhl\Api\Shipping\Personal\CollectionType',
      'CollectionDescType' => 'Tmende\Dhl\Api\Shipping\Personal\CollectionDescType');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://cig.dhl.de/cig-wsdls/com/dpdhl/wsdl/privatkundenversand-api/2.0/privatkundenversand-api-2.0.wsdl', $debug = false)
    {
    	foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
	    		$options['classmap'][$key] = $value;
	    	}
	  	}

	  	$this->_debug = $debug;

	  	if ($this->_debug) {
			$options['trace'] = 1;
			$options['exceptions'] = true;
			$options['cache_wsdl'] = WSDL_CACHE_NONE;
			$options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS;
		}

	  parent::__construct($wsdl, $options);
    }

    /**
     * @param ShoppingCartValidateRequestType $parameters
     * @access public
     * @return ShoppingCartValidateResponseType
     */
    public function ShoppingCartValidate(ShoppingCartValidateRequestType $parameters)
    {
    	try {
    		return $this->__soapCall('ShoppingCartValidate', array($parameters));
    	} catch (SoapFault $fault) {
    		$this->outputErrorMessage($fault);
    	}
    }

    /**
     * @param ShoppingCartCheckoutViaPaymentRequestType $parameters
     * @access public
     * @return ShoppingCartCheckoutViaPaymentResponseType
     */
    public function ShoppingCartCheckoutViaPayment(ShoppingCartCheckoutViaPaymentRequestType $parameters)
    {
    	try {
    		return $this->__soapCall('ShoppingCartCheckoutViaPayment', array($parameters));
    	} catch (SoapFault $fault) {
    		$this->outputErrorMessage($fault);
    	}
    }

    /**
     * @param LoadBuyedShoppingCartRequestType $parameters
     * @access public
     * @return LoadBuyedShoppingCartResponseType
     */
    public function LoadBuyedShoppingCart(LoadBuyedShoppingCartRequestType $parameters)
    {
    	try {
    		return $this->__soapCall('LoadBuyedShoppingCart', array($parameters));
    	} catch (SoapFault $fault) {
    		$this->outputErrorMessage($fault);
    	}
    }

    /**
     * @param ProductInfoRequestType $parameters
     * @access public
     * @return ProductInfoResponseType
     */
    public function ProductInfo(ProductInfoRequestType $parameters)
    {
    	try {
    		return $this->__soapCall('ProductInfo', array($parameters));
    	} catch (SoapFault $fault) {
    		$this->outputErrorMessage($fault);
    	}
    }

    /**
     * @param ShoppingCartOpenRequestType $parameters
     * @access public
     * @return ShoppingCartOpenResponseType
     */
    public function ShoppingCartOpen(ShoppingCartOpenRequestType $parameters)
    {
    	try {
    		return $this->__soapCall('ShoppingCartOpen', array($parameters));
    	} catch (SoapFault $fault) {
    		$this->outputErrorMessage($fault);
    	}
    }

    public function outputErrorMessage($fault)
    {
    	// <xmp> tag displays xml output in html
		echo 'Request Header : <br/><xmp>',
		$this->__getLastRequestHeaders(),
		'</xmp><br/><br/>',
		'Request : <br/><xmp>',
		$this->__getLastRequest(),
		'</xmp><br/><br/>',
		'Response Header : <br/><xmp>',
		$this->__getLastResponseHeaders(),
		'</xmp><br/><br/>',
		'Response : <br/><xmp>',
		$this->__getLastResponse(),
		'</xmp><br/><br/> Error Message : <br/>',
		$fault->getMessage();
    }

}
