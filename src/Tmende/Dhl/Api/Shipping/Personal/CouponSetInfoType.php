<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class CouponSetInfoType
{

    /**
     * @var VoucherUsageContextType[] $UsageContext
     * @access public
     */
    public $UsageContext = null;

    /**
     * @var CouponSetChunkInfoType[] $Chunk
     * @access public
     */
    public $Chunk = null;

    /**
     * @var ProductIdType[] $EncashProduct
     * @access public
     */
    public $EncashProduct = null;

    /**
     * @var ProductIdType $symbolName
     * @access public
     */
    public $symbolName = null;

    /**
     * @var int $maxUsageCounter
     * @access public
     */
    public $maxUsageCounter = null;

    /**
     * @var AmountType $creditAbs
     * @access public
     */
    public $creditAbs = null;

    /**
     * @var int $creditRel
     * @access public
     */
    public $creditRel = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $screenName
     * @access public
     */
    public $screenName = null;

    /**
     * @param VoucherUsageContextType[] $UsageContext
     * @param CouponSetChunkInfoType[] $Chunk
     * @param ProductIdType[] $EncashProduct
     * @param ProductIdType $symbolName
     * @param int $maxUsageCounter
     * @param AmountType $creditAbs
     * @param int $creditRel
     * @param string $description
     * @param string $screenName
     * @access public
     */
    public function __construct($UsageContext, $Chunk, $EncashProduct, $symbolName, $maxUsageCounter, $creditAbs, $creditRel, $description, $screenName)
    {
      $this->UsageContext = $UsageContext;
      $this->Chunk = $Chunk;
      $this->EncashProduct = $EncashProduct;
      $this->symbolName = $symbolName;
      $this->maxUsageCounter = $maxUsageCounter;
      $this->creditAbs = $creditAbs;
      $this->creditRel = $creditRel;
      $this->description = $description;
      $this->screenName = $screenName;
    }

}
