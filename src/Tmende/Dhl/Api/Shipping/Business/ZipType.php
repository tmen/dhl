<?php

class ZipType
{

    /**
     * @var germany $germany
     * @access public
     */
    public $germany = null;

    /**
     * @var england $england
     * @access public
     */
    public $england = null;

    /**
     * @var other $other
     * @access public
     */
    public $other = null;

    /**
     * @param germany $germany
     * @param england $england
     * @param other $other
     * @access public
     */
    public function __construct($germany, $england, $other)
    {
      $this->germany = $germany;
      $this->england = $england;
      $this->other = $other;
    }

}
