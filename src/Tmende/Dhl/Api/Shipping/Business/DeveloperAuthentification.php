<?php

class DeveloperAuthentification
{

    /**
     * @var string $DEVID
     * @access public
     */
    public $DEVID = null;

    /**
     * @var string $APPID
     * @access public
     */
    public $APPID = null;

    /**
     * @var string $CERTID
     * @access public
     */
    public $CERTID = null;

    /**
     * @param string $DEVID
     * @param string $APPID
     * @param string $CERTID
     * @access public
     */
    public function __construct($DEVID, $APPID, $CERTID)
    {
      $this->DEVID = $DEVID;
      $this->APPID = $APPID;
      $this->CERTID = $CERTID;
    }

}
