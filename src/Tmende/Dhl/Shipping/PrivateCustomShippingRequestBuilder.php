<?php namespace Tmende\Dhl\Shipping;

use Tmende\Dhl\Credentials\Credentials;
use Tmende\Dhl\Api\Shipping\Personal\PopPartnerService;
use Tmende\Dhl\Api\Shipping\Personal\AuthType;
use Tmende\Dhl\Api\Shipping\Personal\ProductInfoFilterType as Filter;
use Tmende\Dhl\Api\Shipping\Personal\ProductInfoRequestType;
use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartCheckoutViaPaymentRequestType;

class PrivateCustomShippingRequestBuilder {

	/**
     * @var AuthType $_authType
     * @access private
     */
	private $_authType;

	/**
     * @var PopPartnerService $_service
     * @access private
     */
	private $_service;

	/**
     * @var int $_detailFlags
     * @access private
     */
    private $_detailFlags = 0;

    /**
     * @var string $_version
     * @access private
     */
    private $_version = '2.0.0';

	/**
     * Constructor
     *
     * @param Credentials $credentials
     * @access public
     */
    public function __construct(Credentials $credentials) {

        $this->_authType = $this->createAuthType($credentials);

        if($credentials->environment == 'sandbox') {
        	$pathToWsdl = dirname(__DIR__) . '/Api/WSDL/privatkundenversand-api-2.0.wsdl';
        	$this->_service = new PopPartnerService(array('login' => $credentials->cig_user, 'password' => $credentials->cig_password), $pathToWsdl, $credentials->debug);
        } else {
        	$this->_service = new PopPartnerService();
        }
    }

    /**
     * createAuthType
     *
     * @param Credentials $credentials
     * @access public
     * @return AuthType
     */
	public function createAuthType($credentials) {
		dd($credentials->pcs_subPartnerId);
		return new AuthType($credentials->pcs_partnerId, $credentials->pcs_subPartnerId, $credentials->pcs_user, $credentials->pcs_password, $credentials->cig_sessionAuth, $credentials->cig_accountId);
	}

	/**
     * getProductInfo
     *
     * @param Filter $filter
     * @access public
     * @return ProductInfoResponseType
     */
	public function getProductInfo(Filter $filter = NULL) {
		$parameters = new ProductInfoRequestType($this->_authType, $this->_detailFlags, $this->_version, $filter);
		return $this->_service->ProductInfo($parameters);
	}

	/**
     * getShoppingCartCheckoutViaPayment
     *
     * @param ShoppingCartIdentificationType $shoppingCartIdentification
     * @param BuyShoppingCartType $buyShoppingCart
     * @param DirectLabelInfoType $directLabelInfo
     * @param PartnerBackLinksType $partnerBackLinks
     * @access public
     * @return ShoppingCartCheckoutViaPaymentResponseType
     */
	public function getShoppingCartCheckoutViaPayment(ShoppingCartIdentificationType $shoppingCartIdentification, BuyShoppingCartType $buyShoppingCart, DirectLabelInfoType $directLabelInfo, PartnerBackLinksType $partnerBackLinks) {
		$parameters = new ShoppingCartCheckoutViaPaymentRequestType($this->_authType, $this->_detailFlags, $this->_version, $shoppingCartIdentification, $buyShoppingCart, $directLabelInfo, $PartnerBackLinksType);
		return $this->_service->shoppingCartCheckoutViaPayment($parameters);
	}
}
