<?php

class PostfilialeType
{

    /**
     * @var string $PostfilialNumber
     * @access public
     */
    public $PostfilialNumber = null;

    /**
     * @var string $PostNumber
     * @access public
     */
    public $PostNumber = null;

    /**
     * @var Zip $Zip
     * @access public
     */
    public $Zip = null;

    /**
     * @var City $City
     * @access public
     */
    public $City = null;

    /**
     * @param string $PostfilialNumber
     * @param string $PostNumber
     * @param Zip $Zip
     * @param City $City
     * @access public
     */
    public function __construct($PostfilialNumber, $PostNumber, $Zip, $City)
    {
      $this->PostfilialNumber = $PostfilialNumber;
      $this->PostNumber = $PostNumber;
      $this->Zip = $Zip;
      $this->City = $City;
    }

}
