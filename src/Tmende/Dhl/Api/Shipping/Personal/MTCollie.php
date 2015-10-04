<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class MTCollie
{

    /**
     * @var Description $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var ShipmentDimensionType $Dimension
     * @access public
     */
    public $Dimension = null;

    /**
     * @param Description $Description
     * @param ShipmentDimensionType $Dimension
     * @access public
     */
    public function __construct($Description, $Dimension)
    {
      $this->Description = $Description;
      $this->Dimension = $Dimension;
    }

}
