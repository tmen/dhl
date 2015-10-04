<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\PaymentBaseType;

class PaymentPostpayType extends PaymentBaseType
{

    /**
     * @param string $paymentId
     * @access public
     */
    public function __construct($paymentId)
    {
      parent::__construct($paymentId);
    }

}
