<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class MapEntryType
{

    /**
     * @var string $_
     * @access public
     */
    public $_ = null;

    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @param string $_
     * @param string $key
     * @access public
     */
    public function __construct($_, $key)
    {
      $this->_ = $_;
      $this->key = $key;
    }

}
