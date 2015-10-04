<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\PaymentBaseType;

class PaymentPartnerpayType extends PaymentBaseType
{

    /**
     * @var anonymous63 $userId1
     * @access public
     */
    public $userId1 = null;

    /**
     * @var anonymous64 $userId2
     * @access public
     */
    public $userId2 = null;

    /**
     * @var string $paymentAccount
     * @access public
     */
    public $paymentAccount = null;

    /**
     * @var anonymous65 $paymentTx1
     * @access public
     */
    public $paymentTx1 = null;

    /**
     * @var anonymous66 $paymentTx2
     * @access public
     */
    public $paymentTx2 = null;

    /**
     * @var AmountType $maxBruttoAmount
     * @access public
     */
    public $maxBruttoAmount = null;

    /**
     * @var AmountType $minBruttoAmount
     * @access public
     */
    public $minBruttoAmount = null;

    /**
     * @param string $paymentId
     * @param anonymous63 $userId1
     * @param anonymous64 $userId2
     * @param string $paymentAccount
     * @param anonymous65 $paymentTx1
     * @param anonymous66 $paymentTx2
     * @param AmountType $maxBruttoAmount
     * @param AmountType $minBruttoAmount
     * @access public
     */
    public function __construct($paymentId, $userId1, $userId2, $paymentAccount, $paymentTx1, $paymentTx2, $maxBruttoAmount, $minBruttoAmount)
    {
      parent::__construct($paymentId);
      $this->userId1 = $userId1;
      $this->userId2 = $userId2;
      $this->paymentAccount = $paymentAccount;
      $this->paymentTx1 = $paymentTx1;
      $this->paymentTx2 = $paymentTx2;
      $this->maxBruttoAmount = $maxBruttoAmount;
      $this->minBruttoAmount = $minBruttoAmount;
    }

}
