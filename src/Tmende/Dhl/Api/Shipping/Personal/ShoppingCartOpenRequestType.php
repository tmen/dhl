<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\WsRequestType;

class ShoppingCartOpenRequestType extends WsRequestType
{

    /**
     * @var ShoppingCartBaseType $ShoppingCart
     * @access public
     */
    public $ShoppingCart = null;

    /**
     * @var boolean $acceptAgb
     * @access public
     */
    public $acceptAgb = null;

    /**
     * @var string $notifyUrl
     * @access public
     */
    public $notifyUrl = null;

    /**
     * @var boolean $sendUserEmail
     * @access public
     */
    public $sendUserEmail = null;

    /**
     * @var boolean $sendMaptosRSET
     * @access public
     */
    public $sendMaptosRSET = null;

    /**
     * @var anonymous98 $workflowShowPage
     * @access public
     */
    public $workflowShowPage = null;

    /**
     * @var anonymous99 $shipmentId
     * @access public
     */
    public $shipmentId = null;

    /**
     * @var UNKNOWN $popInternalPageMessage
     * @access public
     */
    public $popInternalPageMessage = null;

    /**
     * @var UNKNOWN $popPaymentAcceptRedirectUrl
     * @access public
     */
    public $popPaymentAcceptRedirectUrl = null;

    /**
     * @var UNKNOWN $popPaymentRejectRedirectUrl
     * @access public
     */
    public $popPaymentRejectRedirectUrl = null;

    /**
     * @var boolean $sendRedirect
     * @access public
     */
    public $sendRedirect = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @param ShoppingCartBaseType $ShoppingCart
     * @param boolean $acceptAgb
     * @param string $notifyUrl
     * @param boolean $sendUserEmail
     * @param boolean $sendMaptosRSET
     * @param anonymous98 $workflowShowPage
     * @param anonymous99 $shipmentId
     * @param UNKNOWN $popInternalPageMessage
     * @param UNKNOWN $popPaymentAcceptRedirectUrl
     * @param UNKNOWN $popPaymentRejectRedirectUrl
     * @param boolean $sendRedirect
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version, $ShoppingCart, $acceptAgb, $notifyUrl, $sendUserEmail, $sendMaptosRSET, $workflowShowPage, $shipmentId, $popInternalPageMessage, $popPaymentAcceptRedirectUrl, $popPaymentRejectRedirectUrl, $sendRedirect)
    {
      parent::__construct($Auth, $detailFlags, $version);
      $this->ShoppingCart = $ShoppingCart;
      $this->acceptAgb = $acceptAgb;
      $this->notifyUrl = $notifyUrl;
      $this->sendUserEmail = $sendUserEmail;
      $this->sendMaptosRSET = $sendMaptosRSET;
      $this->workflowShowPage = $workflowShowPage;
      $this->shipmentId = $shipmentId;
      $this->popInternalPageMessage = $popInternalPageMessage;
      $this->popPaymentAcceptRedirectUrl = $popPaymentAcceptRedirectUrl;
      $this->popPaymentRejectRedirectUrl = $popPaymentRejectRedirectUrl;
      $this->sendRedirect = $sendRedirect;
    }

}
