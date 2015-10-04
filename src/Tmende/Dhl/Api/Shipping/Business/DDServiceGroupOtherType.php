<?php

class DDServiceGroupOtherType
{

    /**
     * @var HigherInsurance $HigherInsurance
     * @access public
     */
    public $HigherInsurance = null;

    /**
     * @var COD $COD
     * @access public
     */
    public $COD = null;

    /**
     * @var Unfree $Unfree
     * @access public
     */
    public $Unfree = null;

    /**
     * @var DangerousGoods $DangerousGoods
     * @access public
     */
    public $DangerousGoods = null;

    /**
     * @var Bulkfreight $Bulkfreight
     * @access public
     */
    public $Bulkfreight = null;

    /**
     * @var boolean $DirectInjection
     * @access public
     */
    public $DirectInjection = null;

    /**
     * @var boolean $Bypass
     * @access public
     */
    public $Bypass = null;

    /**
     * @param HigherInsurance $HigherInsurance
     * @param COD $COD
     * @param Unfree $Unfree
     * @param DangerousGoods $DangerousGoods
     * @param Bulkfreight $Bulkfreight
     * @param boolean $DirectInjection
     * @param boolean $Bypass
     * @access public
     */
    public function __construct($HigherInsurance, $COD, $Unfree, $DangerousGoods, $Bulkfreight, $DirectInjection, $Bypass)
    {
      $this->HigherInsurance = $HigherInsurance;
      $this->COD = $COD;
      $this->Unfree = $Unfree;
      $this->DangerousGoods = $DangerousGoods;
      $this->Bulkfreight = $Bulkfreight;
      $this->DirectInjection = $DirectInjection;
      $this->Bypass = $Bypass;
    }

}
