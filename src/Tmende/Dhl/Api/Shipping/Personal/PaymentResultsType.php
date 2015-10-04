<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PaymentResultsType
{

    /**
     * @var PaymentResultType $PaymentResult
     * @access public
     */
    public $PaymentResult = null;

    /**
     * @param PaymentResultType $PaymentResult
     * @access public
     */
    public function __construct($PaymentResult)
    {
      $this->PaymentResult = $PaymentResult;
    }

}
