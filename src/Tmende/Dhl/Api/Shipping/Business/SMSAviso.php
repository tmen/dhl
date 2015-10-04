<?php

class SMSAviso
{

    /**
     * @var string $MobilePhoneNumberSender
     * @access public
     */
    public $MobilePhoneNumberSender = null;

    /**
     * @var string $MobilePhoneNumberReceiver
     * @access public
     */
    public $MobilePhoneNumberReceiver = null;

    /**
     * @var string $AvisoIdent
     * @access public
     */
    public $AvisoIdent = null;

    /**
     * @param string $MobilePhoneNumberSender
     * @param string $MobilePhoneNumberReceiver
     * @param string $AvisoIdent
     * @access public
     */
    public function __construct($MobilePhoneNumberSender, $MobilePhoneNumberReceiver, $AvisoIdent)
    {
      $this->MobilePhoneNumberSender = $MobilePhoneNumberSender;
      $this->MobilePhoneNumberReceiver = $MobilePhoneNumberReceiver;
      $this->AvisoIdent = $AvisoIdent;
    }

}
