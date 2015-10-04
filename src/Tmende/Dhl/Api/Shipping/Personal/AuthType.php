<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class AuthType
{

    /**
     * @var string $partnerId
     * @access public
     */
    public $partnerId = null;

    /**
     * @var string $subPartnerId
     * @access public
     */
    public $subPartnerId = null;

    /**
     * @var string $user
     * @access public
     */
    public $user = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @var boolean $sessionAuth
     * @access public
     */
    public $sessionAuth = null;

    /**
     * @var string $accountId
     * @access public
     */
    public $accountId = null;

    /**
     * @param string $partnerId
     * @param string $subPartnerId
     * @param string $user
     * @param string $password
     * @param boolean $sessionAuth
     * @param string $accountId
     * @access public
     */
    public function __construct($partnerId, $subPartnerId, $user, $password, $sessionAuth, $accountId)
    {
      $this->partnerId = $partnerId;
      $this->subPartnerId = $subPartnerId;
      $this->user = $user;
      $this->password = $password;
      $this->sessionAuth = $sessionAuth;
      $this->accountId = $accountId;
    }

}
