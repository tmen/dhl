<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class WsResponseType
{

    /**
     * @var WsResponseStatus $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var VersionType $version
     * @access public
     */
    public $version = null;

    /**
     * @param WsResponseStatus $Status
     * @param VersionType $version
     * @access public
     */
    public function __construct($Status, $version)
    {
      $this->Status = $Status;
      $this->version = $version;
    }

}
