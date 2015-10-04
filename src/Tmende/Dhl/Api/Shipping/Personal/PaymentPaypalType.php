<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\PaymentBaseType;

class PaymentPaypalType extends PaymentBaseType
{

    /**
     * @var string $payPalBillingAgreementId
     * @access public
     */
    public $payPalBillingAgreementId = null;

    /**
     * @param string $paymentId
     * @param string $payPalBillingAgreementId
     * @access public
     */
    public function __construct($paymentId, $payPalBillingAgreementId)
    {
      parent::__construct($paymentId);
      $this->payPalBillingAgreementId = $payPalBillingAgreementId;
    }

}
