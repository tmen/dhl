<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ProductServiceDescBaseType;

class ProductDescType extends ProductServiceDescBaseType
{

    /**
     * @var boolean $hidden
     * @access public
     */
    public $hidden = null;

    /**
     * @var int $maxLength
     * @access public
     */
    public $maxLength = null;

    /**
     * @var int $maxWidth
     * @access public
     */
    public $maxWidth = null;

    /**
     * @var int $maxDepth
     * @access public
     */
    public $maxDepth = null;

    /**
     * @var int $maxWeight
     * @access public
     */
    public $maxWeight = null;

    /**
     * @var int $maxGurtmass
     * @access public
     */
    public $maxGurtmass = null;

    /**
     * @var int $maxDiameter
     * @access public
     */
    public $maxDiameter = null;

    /**
     * @var int $minLength
     * @access public
     */
    public $minLength = null;

    /**
     * @var int $minWidth
     * @access public
     */
    public $minWidth = null;

    /**
     * @var int $minDepth
     * @access public
     */
    public $minDepth = null;

    /**
     * @var int $minWeight
     * @access public
     */
    public $minWeight = null;

    /**
     * @var int $minGurtmass
     * @access public
     */
    public $minGurtmass = null;

    /**
     * @var int $minDiameter
     * @access public
     */
    public $minDiameter = null;

    /**
     * @var boolean $noPackstation
     * @access public
     */
    public $noPackstation = null;

    /**
     * @var string $licencePlateType
     * @access public
     */
    public $licencePlateType = null;

    /**
     * @var string $routingCodeType
     * @access public
     */
    public $routingCodeType = null;

    /**
     * @var string $productKey
     * @access public
     */
    public $productKey = null;

    /**
     * @var string $leitcodeProductCode
     * @access public
     */
    public $leitcodeProductCode = null;

    /**
     * @var string $numberRangeName
     * @access public
     */
    public $numberRangeName = null;

    /**
     * @var string $svgtLabel
     * @access public
     */
    public $svgtLabel = null;

    /**
     * @var string $amselProductKey
     * @access public
     */
    public $amselProductKey = null;

    /**
     * @var string $sendCountry
     * @access public
     */
    public $sendCountry = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param string $features
     * @param string $attributes
     * @param string $displayName
     * @param string $displayDescription
     * @param boolean $hidden
     * @param int $maxLength
     * @param int $maxWidth
     * @param int $maxDepth
     * @param int $maxWeight
     * @param int $maxGurtmass
     * @param int $maxDiameter
     * @param int $minLength
     * @param int $minWidth
     * @param int $minDepth
     * @param int $minWeight
     * @param int $minGurtmass
     * @param int $minDiameter
     * @param boolean $noPackstation
     * @param string $licencePlateType
     * @param string $routingCodeType
     * @param string $productKey
     * @param string $leitcodeProductCode
     * @param string $numberRangeName
     * @param string $svgtLabel
     * @param string $amselProductKey
     * @param string $sendCountry
     * @access public
     */
    public function __construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription, $hidden, $maxLength, $maxWidth, $maxDepth, $maxWeight, $maxGurtmass, $maxDiameter, $minLength, $minWidth, $minDepth, $minWeight, $minGurtmass, $minDiameter, $noPackstation, $licencePlateType, $routingCodeType, $productKey, $leitcodeProductCode, $numberRangeName, $svgtLabel, $amselProductKey, $sendCountry)
    {
      parent::__construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription);
      $this->hidden = $hidden;
      $this->maxLength = $maxLength;
      $this->maxWidth = $maxWidth;
      $this->maxDepth = $maxDepth;
      $this->maxWeight = $maxWeight;
      $this->maxGurtmass = $maxGurtmass;
      $this->maxDiameter = $maxDiameter;
      $this->minLength = $minLength;
      $this->minWidth = $minWidth;
      $this->minDepth = $minDepth;
      $this->minWeight = $minWeight;
      $this->minGurtmass = $minGurtmass;
      $this->minDiameter = $minDiameter;
      $this->noPackstation = $noPackstation;
      $this->licencePlateType = $licencePlateType;
      $this->routingCodeType = $routingCodeType;
      $this->productKey = $productKey;
      $this->leitcodeProductCode = $leitcodeProductCode;
      $this->numberRangeName = $numberRangeName;
      $this->svgtLabel = $svgtLabel;
      $this->amselProductKey = $amselProductKey;
      $this->sendCountry = $sendCountry;
    }

}
