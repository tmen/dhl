<?php

class manifestDateRange
{

    /**
     * @var string $fromDate
     * @access public
     */
    public $fromDate = null;

    /**
     * @var string $toDate
     * @access public
     */
    public $toDate = null;

    /**
     * @param string $fromDate
     * @param string $toDate
     * @access public
     */
    public function __construct($fromDate, $toDate)
    {
      $this->fromDate = $fromDate;
      $this->toDate = $toDate;
    }

}
