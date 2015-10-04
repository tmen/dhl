<?php

class DDServiceGroupDateTimeOptionType
{

    /**
     * @var DeliveryOnTime $DeliveryOnTime
     * @access public
     */
    public $DeliveryOnTime = null;

    /**
     * @var boolean $DeliveryEarly
     * @access public
     */
    public $DeliveryEarly = null;

    /**
     * @var boolean $Express0900
     * @access public
     */
    public $Express0900 = null;

    /**
     * @var boolean $Express1000
     * @access public
     */
    public $Express1000 = null;

    /**
     * @var boolean $Express1200
     * @access public
     */
    public $Express1200 = null;

    /**
     * @var boolean $DeliveryAfternoon
     * @access public
     */
    public $DeliveryAfternoon = null;

    /**
     * @var boolean $DeliveryEvening
     * @access public
     */
    public $DeliveryEvening = null;

    /**
     * @var boolean $ExpressSaturday
     * @access public
     */
    public $ExpressSaturday = null;

    /**
     * @var boolean $ExpressSunday
     * @access public
     */
    public $ExpressSunday = null;

    /**
     * @param DeliveryOnTime $DeliveryOnTime
     * @param boolean $DeliveryEarly
     * @param boolean $Express0900
     * @param boolean $Express1000
     * @param boolean $Express1200
     * @param boolean $DeliveryAfternoon
     * @param boolean $DeliveryEvening
     * @param boolean $ExpressSaturday
     * @param boolean $ExpressSunday
     * @access public
     */
    public function __construct($DeliveryOnTime, $DeliveryEarly, $Express0900, $Express1000, $Express1200, $DeliveryAfternoon, $DeliveryEvening, $ExpressSaturday, $ExpressSunday)
    {
      $this->DeliveryOnTime = $DeliveryOnTime;
      $this->DeliveryEarly = $DeliveryEarly;
      $this->Express0900 = $Express0900;
      $this->Express1000 = $Express1000;
      $this->Express1200 = $Express1200;
      $this->DeliveryAfternoon = $DeliveryAfternoon;
      $this->DeliveryEvening = $DeliveryEvening;
      $this->ExpressSaturday = $ExpressSaturday;
      $this->ExpressSunday = $ExpressSunday;
    }

}
