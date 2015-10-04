<?php

class NameType
{

    /**
     * @var Person $Person
     * @access public
     */
    public $Person = null;

    /**
     * @var Company $Company
     * @access public
     */
    public $Company = null;

    /**
     * @param Person $Person
     * @param Company $Company
     * @access public
     */
    public function __construct($Person, $Company)
    {
      $this->Person = $Person;
      $this->Company = $Company;
    }

}
