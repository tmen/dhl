<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class Cn2223LineType
{

    /**
     * @var anonymous44 $description
     * @access public
     */
    public $description = null;

    /**
     * @var int $weight
     * @access public
     */
    public $weight = null;

    /**
     * @var float $value
     * @access public
     */
    public $value = null;

    /**
     * @var anonymous45 $tarifCode
     * @access public
     */
    public $tarifCode = null;

    /**
     * @var anonymous46 $originCountryCode
     * @access public
     */
    public $originCountryCode = null;

    /**
     * @var int $count
     * @access public
     */
    public $count = null;

    /**
     * @param anonymous44 $description
     * @param int $weight
     * @param float $value
     * @param anonymous45 $tarifCode
     * @param anonymous46 $originCountryCode
     * @param int $count
     * @access public
     */
    public function __construct($description, $weight, $value, $tarifCode, $originCountryCode, $count)
    {
      $this->description = $description;
      $this->weight = $weight;
      $this->value = $value;
      $this->tarifCode = $tarifCode;
      $this->originCountryCode = $originCountryCode;
      $this->count = $count;
    }

}
