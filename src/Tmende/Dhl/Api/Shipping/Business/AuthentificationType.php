<?php

class AuthentificationType
{

    /**
     * @var user $user
     * @access public
     */
    public $user = null;

    /**
     * @var signature $signature
     * @access public
     */
    public $signature = null;

    /**
     * @var accountNumber $accountNumber
     * @access public
     */
    public $accountNumber = null;

    /**
     * @var type $type
     * @access public
     */
    public $type = null;

    /**
     * @param user $user
     * @param signature $signature
     * @param accountNumber $accountNumber
     * @param type $type
     * @access public
     */
    public function __construct($user, $signature, $accountNumber, $type)
    {
      $this->user = $user;
      $this->signature = $signature;
      $this->accountNumber = $accountNumber;
      $this->type = $type;
    }

}
