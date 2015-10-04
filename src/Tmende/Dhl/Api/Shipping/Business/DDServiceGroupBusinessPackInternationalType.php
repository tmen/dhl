<?php

class DDServiceGroupBusinessPackInternationalType
{

    /**
     * @var boolean $Economy
     * @access public
     */
    public $Economy = null;

    /**
     * @var boolean $Premium
     * @access public
     */
    public $Premium = null;

    /**
     * @var boolean $Seapacket
     * @access public
     */
    public $Seapacket = null;

    /**
     * @var boolean $CoilWithoutHelp
     * @access public
     */
    public $CoilWithoutHelp = null;

    /**
     * @var Endorsement $Endorsement
     * @access public
     */
    public $Endorsement = null;

    /**
     * @var boolean $AmountInternational
     * @access public
     */
    public $AmountInternational = null;

    /**
     * @param boolean $Economy
     * @param boolean $Premium
     * @param boolean $Seapacket
     * @param boolean $CoilWithoutHelp
     * @param Endorsement $Endorsement
     * @param boolean $AmountInternational
     * @access public
     */
    public function __construct($Economy, $Premium, $Seapacket, $CoilWithoutHelp, $Endorsement, $AmountInternational)
    {
      $this->Economy = $Economy;
      $this->Premium = $Premium;
      $this->Seapacket = $Seapacket;
      $this->CoilWithoutHelp = $CoilWithoutHelp;
      $this->Endorsement = $Endorsement;
      $this->AmountInternational = $AmountInternational;
    }

}
