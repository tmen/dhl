<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class CouponSetChunkInfoType
{

    /**
     * @var int $chunkSize
     * @access public
     */
    public $chunkSize = null;

    /**
     * @var AmountType $amount
     * @access public
     */
    public $amount = null;

    /**
     * @param int $chunkSize
     * @param AmountType $amount
     * @access public
     */
    public function __construct($chunkSize, $amount)
    {
      $this->chunkSize = $chunkSize;
      $this->amount = $amount;
    }

}
