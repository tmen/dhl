<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PaymentInfoType
{

    /**
     * @var PaymentResultsType $PaymentResults
     * @access public
     */
    public $PaymentResults = null;

    /**
     * @var anonymous72 $status
     * @access public
     */
    public $status = null;

    /**
     * @var string $transactionId1
     * @access public
     */
    public $transactionId1 = null;

    /**
     * @var string $transactionId2
     * @access public
     */
    public $transactionId2 = null;

    /**
     * @var string $userEmail
     * @access public
     */
    public $userEmail = null;

    /**
     * @var string $userId
     * @access public
     */
    public $userId = null;

    /**
     * @var string $accountNumber
     * @access public
     */
    public $accountNumber = null;

    /**
     * @var string $bankCode
     * @access public
     */
    public $bankCode = null;

    /**
     * @var string $paymentCode
     * @access public
     */
    public $paymentCode = null;

    /**
     * @var string $paymentMessage
     * @access public
     */
    public $paymentMessage = null;

    /**
     * @var string $paymentRC
     * @access public
     */
    public $paymentRC = null;

    /**
     * @var dateTime $statusDate
     * @access public
     */
    public $statusDate = null;

    /**
     * @var string $paymentId
     * @access public
     */
    public $paymentId = null;

    /**
     * @var string $paymentLongMessage
     * @access public
     */
    public $paymentLongMessage = null;

    /**
     * @var string $confirmStatus
     * @access public
     */
    public $confirmStatus = null;

    /**
     * @var string $paymentMethod
     * @access public
     */
    public $paymentMethod = null;

    /**
     * @param PaymentResultsType $PaymentResults
     * @param anonymous72 $status
     * @param string $transactionId1
     * @param string $transactionId2
     * @param string $userEmail
     * @param string $userId
     * @param string $accountNumber
     * @param string $bankCode
     * @param string $paymentCode
     * @param string $paymentMessage
     * @param string $paymentRC
     * @param dateTime $statusDate
     * @param string $paymentId
     * @param string $paymentLongMessage
     * @param string $confirmStatus
     * @param string $paymentMethod
     * @access public
     */
    public function __construct($PaymentResults, $status, $transactionId1, $transactionId2, $userEmail, $userId, $accountNumber, $bankCode, $paymentCode, $paymentMessage, $paymentRC, $statusDate, $paymentId, $paymentLongMessage, $confirmStatus, $paymentMethod)
    {
      $this->PaymentResults = $PaymentResults;
      $this->status = $status;
      $this->transactionId1 = $transactionId1;
      $this->transactionId2 = $transactionId2;
      $this->userEmail = $userEmail;
      $this->userId = $userId;
      $this->accountNumber = $accountNumber;
      $this->bankCode = $bankCode;
      $this->paymentCode = $paymentCode;
      $this->paymentMessage = $paymentMessage;
      $this->paymentRC = $paymentRC;
      $this->statusDate = $statusDate;
      $this->paymentId = $paymentId;
      $this->paymentLongMessage = $paymentLongMessage;
      $this->confirmStatus = $confirmStatus;
      $this->paymentMethod = $paymentMethod;
    }

}
