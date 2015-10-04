<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ShipmentDimensionType
{

    /**
     * @var int $length
     * @access public
     */
    public $length = null;

    /**
     * @var int $width
     * @access public
     */
    public $width = null;

    /**
     * @var int $depth
     * @access public
     */
    public $depth = null;

    /**
     * @var int $weight
     * @access public
     */
    public $weight = null;

    /**
     * @param int $length
     * @param int $width
     * @param int $depth
     * @param int $weight
     * @access public
     */
    public function __construct($length, $width, $depth, $weight)
    {
      $this->length = $length;
      $this->width = $width;
      $this->depth = $depth;
      $this->weight = $weight;
    }

}
