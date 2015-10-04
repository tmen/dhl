<?php

class DangerousGoods
{

    /**
     * @var string $DangerousGoodsClass
     * @access public
     */
    public $DangerousGoodsClass = null;

    /**
     * @var string $DangerousGoodsPackagingType
     * @access public
     */
    public $DangerousGoodsPackagingType = null;

    /**
     * @var string $DangerousGoodsUNCode
     * @access public
     */
    public $DangerousGoodsUNCode = null;

    /**
     * @param string $DangerousGoodsClass
     * @param string $DangerousGoodsPackagingType
     * @param string $DangerousGoodsUNCode
     * @access public
     */
    public function __construct($DangerousGoodsClass, $DangerousGoodsPackagingType, $DangerousGoodsUNCode)
    {
      $this->DangerousGoodsClass = $DangerousGoodsClass;
      $this->DangerousGoodsPackagingType = $DangerousGoodsPackagingType;
      $this->DangerousGoodsUNCode = $DangerousGoodsUNCode;
    }

}
