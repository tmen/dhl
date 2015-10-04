<?php

class ShipmentServiceTD
{

    /**
     * @var TDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @access public
     */
    public $ServiceGroupDateTimeOption = null;

    /**
     * @var TDServiceGroupOtherType $ServiceGroupOther
     * @access public
     */
    public $ServiceGroupOther = null;

    /**
     * @param TDServiceGroupDateTimeOptionType $ServiceGroupDateTimeOption
     * @param TDServiceGroupOtherType $ServiceGroupOther
     * @access public
     */
    public function __construct($ServiceGroupDateTimeOption, $ServiceGroupOther)
    {
      $this->ServiceGroupDateTimeOption = $ServiceGroupDateTimeOption;
      $this->ServiceGroupOther = $ServiceGroupOther;
    }

}
