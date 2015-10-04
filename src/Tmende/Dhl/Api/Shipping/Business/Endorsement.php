<?php

class Endorsement
{

    /**
     * @var EndorsementServiceconfiguration $UZN
     * @access public
     */
    public $UZN = null;

    /**
     * @var EndorsementServiceconfiguration $KeNa
     * @access public
     */
    public $KeNa = null;

    /**
     * @var EndorsementServiceconfiguration $NSI
     * @access public
     */
    public $NSI = null;

    /**
     * @var EndorsementServiceconfigurationTeZu $TeZu
     * @access public
     */
    public $TeZu = null;

    /**
     * @var EndorsementServiceconfiguration $SoZue
     * @access public
     */
    public $SoZue = null;

    /**
     * @param EndorsementServiceconfiguration $UZN
     * @param EndorsementServiceconfiguration $KeNa
     * @param EndorsementServiceconfiguration $NSI
     * @param EndorsementServiceconfigurationTeZu $TeZu
     * @param EndorsementServiceconfiguration $SoZue
     * @access public
     */
    public function __construct($UZN, $KeNa, $NSI, $TeZu, $SoZue)
    {
      $this->UZN = $UZN;
      $this->KeNa = $KeNa;
      $this->NSI = $NSI;
      $this->TeZu = $TeZu;
      $this->SoZue = $SoZue;
    }

}
