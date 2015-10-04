<?php

class Person
{

    /**
     * @var salutation $salutation
     * @access public
     */
    public $salutation = null;

    /**
     * @var title $title
     * @access public
     */
    public $title = null;

    /**
     * @var firstname $firstname
     * @access public
     */
    public $firstname = null;

    /**
     * @var middlename $middlename
     * @access public
     */
    public $middlename = null;

    /**
     * @var lastname $lastname
     * @access public
     */
    public $lastname = null;

    /**
     * @param salutation $salutation
     * @param title $title
     * @param firstname $firstname
     * @param middlename $middlename
     * @param lastname $lastname
     * @access public
     */
    public function __construct($salutation, $title, $firstname, $middlename, $lastname)
    {
      $this->salutation = $salutation;
      $this->title = $title;
      $this->firstname = $firstname;
      $this->middlename = $middlename;
      $this->lastname = $lastname;
    }

}
