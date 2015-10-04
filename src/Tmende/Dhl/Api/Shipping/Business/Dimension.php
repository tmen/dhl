<?php

class Dimension
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
     * @var int $height
     * @access public
     */
    public $height = null;

    /**
     * @var unit $unit
     * @access public
     */
    public $unit = null;

    /**
     * @param int $length
     * @param int $width
     * @param int $height
     * @param unit $unit
     * @access public
     */
    public function __construct($length, $width, $height, $unit)
    {
      $this->length = $length;
      $this->width = $width;
      $this->height = $height;
      $this->unit = $unit;
    }

}
