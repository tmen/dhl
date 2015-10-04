<?php

class timeinfo
{

    /**
     * @var int $type
     * @access public
     */
    public $type = null;

    /**
     * @var int $dayFrom
     * @access public
     */
    public $dayFrom = null;

    /**
     * @var int $dayTo
     * @access public
     */
    public $dayTo = null;

    /**
     * @var string $timeFrom
     * @access public
     */
    public $timeFrom = null;

    /**
     * @var string $timeTo
     * @access public
     */
    public $timeTo = null;

    /**
     * @param int $type
     * @param int $dayFrom
     * @param int $dayTo
     * @param string $timeFrom
     * @param string $timeTo
     * @access public
     */
    public function __construct($type, $dayFrom, $dayTo, $timeFrom, $timeTo)
    {
      $this->type = $type;
      $this->dayFrom = $dayFrom;
      $this->dayTo = $dayTo;
      $this->timeFrom = $timeFrom;
      $this->timeTo = $timeTo;
    }

}
