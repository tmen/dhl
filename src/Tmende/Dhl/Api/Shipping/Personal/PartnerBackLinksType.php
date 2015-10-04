<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PartnerBackLinksType
{

    /**
     * @var string $paymentAcceptedUrl
     * @access public
     */
    public $paymentAcceptedUrl = null;

    /**
     * @var string $paymentRejectedUrl
     * @access public
     */
    public $paymentRejectedUrl = null;

    /**
     * @param string $paymentAcceptedUrl
     * @param string $paymentRejectedUrl
     * @access public
     */
    public function __construct($paymentAcceptedUrl, $paymentRejectedUrl)
    {
      $this->paymentAcceptedUrl = $paymentAcceptedUrl;
      $this->paymentRejectedUrl = $paymentRejectedUrl;
    }

}
