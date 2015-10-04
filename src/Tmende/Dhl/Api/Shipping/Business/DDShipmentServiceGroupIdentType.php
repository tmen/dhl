<?php

class DDShipmentServiceGroupIdentType
{

    /**
     * @var Ident $Ident
     * @access public
     */
    public $Ident = null;

    /**
     * @var IdentExtra $IdentExtra
     * @access public
     */
    public $IdentExtra = null;

    /**
     * @var IdentPremium $IdentPremium
     * @access public
     */
    public $IdentPremium = null;

    /**
     * @var boolean $Personally
     * @access public
     */
    public $Personally = null;

    /**
     * @var boolean $ReturnReceipt
     * @access public
     */
    public $ReturnReceipt = null;

    /**
     * @var boolean $ProofOfDelivery
     * @access public
     */
    public $ProofOfDelivery = null;

    /**
     * @var ContractSubmission $ContractSubmission
     * @access public
     */
    public $ContractSubmission = null;

    /**
     * @var SMSAviso $SMSAviso
     * @access public
     */
    public $SMSAviso = null;

    /**
     * @var CheckMinimumAge $CheckMinimumAge
     * @access public
     */
    public $CheckMinimumAge = null;

    /**
     * @param Ident $Ident
     * @param IdentExtra $IdentExtra
     * @param IdentPremium $IdentPremium
     * @param boolean $Personally
     * @param boolean $ReturnReceipt
     * @param boolean $ProofOfDelivery
     * @param ContractSubmission $ContractSubmission
     * @param SMSAviso $SMSAviso
     * @param CheckMinimumAge $CheckMinimumAge
     * @access public
     */
    public function __construct($Ident, $IdentExtra, $IdentPremium, $Personally, $ReturnReceipt, $ProofOfDelivery, $ContractSubmission, $SMSAviso, $CheckMinimumAge)
    {
      $this->Ident = $Ident;
      $this->IdentExtra = $IdentExtra;
      $this->IdentPremium = $IdentPremium;
      $this->Personally = $Personally;
      $this->ReturnReceipt = $ReturnReceipt;
      $this->ProofOfDelivery = $ProofOfDelivery;
      $this->ContractSubmission = $ContractSubmission;
      $this->SMSAviso = $SMSAviso;
      $this->CheckMinimumAge = $CheckMinimumAge;
    }

}
