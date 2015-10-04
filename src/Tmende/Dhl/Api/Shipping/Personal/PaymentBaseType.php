<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PaymentBaseType
{

    /**
     * @var string $paymentId
     * @access public
     */
    public $paymentId = null;

    /**
     * @param string $paymentId
     * @access public
     */
    public function __construct($paymentId)
    {
      $this->paymentId = $paymentId;
    }

}
