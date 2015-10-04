<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PositionsType
{

    /**
     * @var int[] $Position
     * @access public
     */
    public $Position = null;

    /**
     * @param int[] $Position
     * @access public
     */
    public function __construct($Position)
    {
      $this->Position = $Position;
    }

}
