<?php

class ErrorType
{

    /**
     * @var int $priority
     * @access public
     */
    public $priority = null;

    /**
     * @var int $code
     * @access public
     */
    public $code = null;

    /**
     * @var dateTime $dateTime
     * @access public
     */
    public $dateTime = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @var string $descriptionLong
     * @access public
     */
    public $descriptionLong = null;

    /**
     * @var string $solution
     * @access public
     */
    public $solution = null;

    /**
     * @var string $application
     * @access public
     */
    public $application = null;

    /**
     * @var string $module
     * @access public
     */
    public $module = null;

    /**
     * @param int $priority
     * @param int $code
     * @param dateTime $dateTime
     * @param string $description
     * @param string $descriptionLong
     * @param string $solution
     * @param string $application
     * @param string $module
     * @access public
     */
    public function __construct($priority, $code, $dateTime, $description, $descriptionLong, $solution, $application, $module)
    {
      $this->priority = $priority;
      $this->code = $code;
      $this->dateTime = $dateTime;
      $this->description = $description;
      $this->descriptionLong = $descriptionLong;
      $this->solution = $solution;
      $this->application = $application;
      $this->module = $module;
    }

}
