<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class WsRequestType
{

    /**
     * @var AuthType $Auth
     * @access public
     */
    public $Auth = null;

    /**
     * @var int $detailFlags
     * @access public
     */
    public $detailFlags = null;

    /**
     * @var VersionType $version
     * @access public
     */
    public $version = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version)
    {
      $this->Auth = $Auth;
      $this->detailFlags = $detailFlags;
      $this->version = $version;
    }

}
