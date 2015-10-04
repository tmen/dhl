<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\PaymentBaseType;

class PaymentGiropayType extends PaymentBaseType
{

    /**
     * @var string $blz
     * @access public
     */
    public $blz = null;

    /**
     * @param string $paymentId
     * @param string $blz
     * @access public
     */
    public function __construct($paymentId, $blz)
    {
      parent::__construct($paymentId);
      $this->blz = $blz;
    }

}
