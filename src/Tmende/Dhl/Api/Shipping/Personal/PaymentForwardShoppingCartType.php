<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PaymentForwardShoppingCartType
{

    /**
     * @var string $paymentUrl
     * @access public
     */
    public $paymentUrl = null;

    /**
     * @param string $paymentUrl
     * @access public
     */
    public function __construct($paymentUrl)
    {
      $this->paymentUrl = $paymentUrl;
    }

}
