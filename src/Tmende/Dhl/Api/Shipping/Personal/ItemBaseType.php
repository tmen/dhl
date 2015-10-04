<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemBaseType
{

    /**
     * @var int $itemId
     * @access public
     */
    public $itemId = null;

    /**
     * @param int $itemId
     * @access public
     */
    public function __construct($itemId)
    {
      $this->itemId = $itemId;
    }

}
