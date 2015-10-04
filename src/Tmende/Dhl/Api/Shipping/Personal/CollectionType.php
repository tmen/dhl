<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class CollectionType extends NamedReferenceType
{

    /**
     * @var CollectionDescType $CollectionDesc
     * @access public
     */
    public $CollectionDesc = null;

    /**
     * @var PricesType[] $Prices
     * @access public
     */
    public $Prices = null;

    /**
     * @var string $type
     * @access public
     */
    public $type = null;

    /**
     * @var string $nonWorkingWeekDays
     * @access public
     */
    public $nonWorkingWeekDays = null;

    /**
     * @var int $earliestPickupOffset
     * @access public
     */
    public $earliestPickupOffset = null;

    /**
     * @var string $pickupTimeLimit
     * @access public
     */
    public $pickupTimeLimit = null;

    /**
     * @var int $maxCollectableItems
     * @access public
     */
    public $maxCollectableItems = null;

    /**
     * @var string $timeWindows
     * @access public
     */
    public $timeWindows = null;

    /**
     * @var boolean $allowStandalone
     * @access public
     */
    public $allowStandalone = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param CollectionDescType $CollectionDesc
     * @param PricesType[] $Prices
     * @param string $type
     * @param string $nonWorkingWeekDays
     * @param int $earliestPickupOffset
     * @param string $pickupTimeLimit
     * @param int $maxCollectableItems
     * @param string $timeWindows
     * @param boolean $allowStandalone
     * @access public
     */
    public function __construct($id, $idref, $name, $CollectionDesc, $Prices, $type, $nonWorkingWeekDays, $earliestPickupOffset, $pickupTimeLimit, $maxCollectableItems, $timeWindows, $allowStandalone)
    {
      parent::__construct($id, $idref, $name);
      $this->CollectionDesc = $CollectionDesc;
      $this->Prices = $Prices;
      $this->type = $type;
      $this->nonWorkingWeekDays = $nonWorkingWeekDays;
      $this->earliestPickupOffset = $earliestPickupOffset;
      $this->pickupTimeLimit = $pickupTimeLimit;
      $this->maxCollectableItems = $maxCollectableItems;
      $this->timeWindows = $timeWindows;
      $this->allowStandalone = $allowStandalone;
    }

}
