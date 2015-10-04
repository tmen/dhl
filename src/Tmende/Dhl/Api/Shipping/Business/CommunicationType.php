<?php

class CommunicationType
{

    /**
     * @var phone $phone
     * @access public
     */
    public $phone = null;

    /**
     * @var email $email
     * @access public
     */
    public $email = null;

    /**
     * @var fax $fax
     * @access public
     */
    public $fax = null;

    /**
     * @var mobile $mobile
     * @access public
     */
    public $mobile = null;

    /**
     * @var internet $internet
     * @access public
     */
    public $internet = null;

    /**
     * @var contactPerson $contactPerson
     * @access public
     */
    public $contactPerson = null;

    /**
     * @param phone $phone
     * @param email $email
     * @param fax $fax
     * @param mobile $mobile
     * @param internet $internet
     * @param contactPerson $contactPerson
     * @access public
     */
    public function __construct($phone, $email, $fax, $mobile, $internet, $contactPerson)
    {
      $this->phone = $phone;
      $this->email = $email;
      $this->fax = $fax;
      $this->mobile = $mobile;
      $this->internet = $internet;
      $this->contactPerson = $contactPerson;
    }

}
