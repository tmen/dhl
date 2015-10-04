<?php

class ExportDocPosition
{

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var string $CountryCodeOrigin
     * @access public
     */
    public $CountryCodeOrigin = null;

    /**
     * @var string $CommodityCode
     * @access public
     */
    public $CommodityCode = null;

    /**
     * @var Amount $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var NetWeightInKG $NetWeightInKG
     * @access public
     */
    public $NetWeightInKG = null;

    /**
     * @var GrossWeightInKG $GrossWeightInKG
     * @access public
     */
    public $GrossWeightInKG = null;

    /**
     * @var CustomsValue $CustomsValue
     * @access public
     */
    public $CustomsValue = null;

    /**
     * @var string $CustomsCurrency
     * @access public
     */
    public $CustomsCurrency = null;

    /**
     * @param string $Description
     * @param string $CountryCodeOrigin
     * @param string $CommodityCode
     * @param Amount $Amount
     * @param NetWeightInKG $NetWeightInKG
     * @param GrossWeightInKG $GrossWeightInKG
     * @param CustomsValue $CustomsValue
     * @param string $CustomsCurrency
     * @access public
     */
    public function __construct($Description, $CountryCodeOrigin, $CommodityCode, $Amount, $NetWeightInKG, $GrossWeightInKG, $CustomsValue, $CustomsCurrency)
    {
      $this->Description = $Description;
      $this->CountryCodeOrigin = $CountryCodeOrigin;
      $this->CommodityCode = $CommodityCode;
      $this->Amount = $Amount;
      $this->NetWeightInKG = $NetWeightInKG;
      $this->GrossWeightInKG = $GrossWeightInKG;
      $this->CustomsValue = $CustomsValue;
      $this->CustomsCurrency = $CustomsCurrency;
    }

}
