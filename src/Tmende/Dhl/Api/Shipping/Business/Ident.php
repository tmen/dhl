<?php

class Ident
{

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var DateOfBirth $DateOfBirth
     * @access public
     */
    public $DateOfBirth = null;

    /**
     * @var string $IdentityCardType
     * @access public
     */
    public $IdentityCardType = null;

    /**
     * @var string $IdentityCardNumber
     * @access public
     */
    public $IdentityCardNumber = null;

    /**
     * @param string $Name
     * @param DateOfBirth $DateOfBirth
     * @param string $IdentityCardType
     * @param string $IdentityCardNumber
     * @access public
     */
    public function __construct($Name, $DateOfBirth, $IdentityCardType, $IdentityCardNumber)
    {
      $this->Name = $Name;
      $this->DateOfBirth = $DateOfBirth;
      $this->IdentityCardType = $IdentityCardType;
      $this->IdentityCardNumber = $IdentityCardNumber;
    }

}
