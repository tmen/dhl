<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class Cn22Type
{

    /**
     * @var TypeOfGoods $TypeOfGoods
     * @access public
     */
    public $TypeOfGoods = null;

    /**
     * @var Cn2223LineType $CnLine
     * @access public
     */
    public $CnLine = null;

    /**
     * @var boolean $cn23
     * @access public
     */
    public $cn23 = null;

    /**
     * @var anonymous42 $currency
     * @access public
     */
    public $currency = null;

    /**
     * @var int $bruttoWeight
     * @access public
     */
    public $bruttoWeight = null;

    /**
     * @var string $typeOtherDeclaration
     * @access public
     */
    public $typeOtherDeclaration = null;

    /**
     * @var string $billnumber
     * @access public
     */
    public $billnumber = null;

    /**
     * @var string $approval
     * @access public
     */
    public $approval = null;

    /**
     * @var string $certificate
     * @access public
     */
    public $certificate = null;

    /**
     * @var string $otherDeclarations
     * @access public
     */
    public $otherDeclarations = null;

    /**
     * @param TypeOfGoods $TypeOfGoods
     * @param Cn2223LineType $CnLine
     * @param boolean $cn23
     * @param anonymous42 $currency
     * @param int $bruttoWeight
     * @param string $typeOtherDeclaration
     * @param string $billnumber
     * @param string $approval
     * @param string $certificate
     * @param string $otherDeclarations
     * @access public
     */
    public function __construct($TypeOfGoods, $CnLine, $cn23, $currency, $bruttoWeight, $typeOtherDeclaration, $billnumber, $approval, $certificate, $otherDeclarations)
    {
      $this->TypeOfGoods = $TypeOfGoods;
      $this->CnLine = $CnLine;
      $this->cn23 = $cn23;
      $this->currency = $currency;
      $this->bruttoWeight = $bruttoWeight;
      $this->typeOtherDeclaration = $typeOtherDeclaration;
      $this->billnumber = $billnumber;
      $this->approval = $approval;
      $this->certificate = $certificate;
      $this->otherDeclarations = $otherDeclarations;
    }

}
