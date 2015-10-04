<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ProductServiceDescBaseType;

class BaseProductDescType extends ProductServiceDescBaseType
{

    /**
     * @var boolean $hidden
     * @access public
     */
    public $hidden = null;

    /**
     * @var string $symbols
     * @access public
     */
    public $symbols = null;

    /**
     * @var string $orderKey
     * @access public
     */
    public $orderKey = null;

    /**
     * @var float $cp71limit
     * @access public
     */
    public $cp71limit = null;

    /**
     * @var float $cn2223limit
     * @access public
     */
    public $cn2223limit = null;

    /**
     * @var string $sendCountry
     * @access public
     */
    public $sendCountry = null;

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
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param string $features
     * @param string $attributes
     * @param string $displayName
     * @param string $displayDescription
     * @param boolean $hidden
     * @param string $symbols
     * @param string $orderKey
     * @param float $cp71limit
     * @param float $cn2223limit
     * @param string $sendCountry
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
     * @access public
     */
    public function __construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription, $hidden, $symbols, $orderKey, $cp71limit, $cn2223limit, $sendCountry, $maxLength, $maxWidth, $maxDepth, $maxWeight, $maxGurtmass, $maxDiameter, $minLength, $minWidth, $minDepth, $minWeight, $minGurtmass, $minDiameter)
    {
      parent::__construct($id, $idref, $name, $features, $attributes, $displayName, $displayDescription);
      $this->hidden = $hidden;
      $this->symbols = $symbols;
      $this->orderKey = $orderKey;
      $this->cp71limit = $cp71limit;
      $this->cn2223limit = $cn2223limit;
      $this->sendCountry = $sendCountry;
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
    }

}
