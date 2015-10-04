<?php

class PackstationType
{

    /**
     * @var string $PackstationNumber
     * @access public
     */
    public $PackstationNumber = null;

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
     * @param string $PackstationNumber
     * @param string $PostNumber
     * @param Zip $Zip
     * @param City $City
     * @access public
     */
    public function __construct($PackstationNumber, $PostNumber, $Zip, $City)
    {
      $this->PackstationNumber = $PackstationNumber;
      $this->PostNumber = $PostNumber;
      $this->Zip = $Zip;
      $this->City = $City;
    }

}
