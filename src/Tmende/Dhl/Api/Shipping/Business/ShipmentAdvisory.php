<?php

class ShipmentAdvisory
{

    /**
     * @var AdvisoryData $AdvisoryData
     * @access public
     */
    public $AdvisoryData = null;

    /**
     * @param AdvisoryData $AdvisoryData
     * @access public
     */
    public function __construct($AdvisoryData)
    {
      $this->AdvisoryData = $AdvisoryData;
    }

}
