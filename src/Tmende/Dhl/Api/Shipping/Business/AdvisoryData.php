<?php

class AdvisoryData
{

    /**
     * @var string $ModuleType
     * @access public
     */
    public $ModuleType = null;

    /**
     * @var string $MobilePhoneNumber
     * @access public
     */
    public $MobilePhoneNumber = null;

    /**
     * @var string $EmailAddress
     * @access public
     */
    public $EmailAddress = null;

    /**
     * @var string $Reference
     * @access public
     */
    public $Reference = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @param string $ModuleType
     * @param string $MobilePhoneNumber
     * @param string $EmailAddress
     * @param string $Reference
     * @param string $Language
     * @access public
     */
    public function __construct($ModuleType, $MobilePhoneNumber, $EmailAddress, $Reference, $Language)
    {
      $this->ModuleType = $ModuleType;
      $this->MobilePhoneNumber = $MobilePhoneNumber;
      $this->EmailAddress = $EmailAddress;
      $this->Reference = $Reference;
      $this->Language = $Language;
    }

}
