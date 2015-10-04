<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class MapType
{

    /**
     * @var MapEntryType[] $entry
     * @access public
     */
    public $entry = null;

    /**
     * @param MapEntryType[] $entry
     * @access public
     */
    public function __construct($entry)
    {
      $this->entry = $entry;
    }

}
