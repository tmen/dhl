<?php

class ShipmentNotificationType
{

    /**
     * @var string $RecipientName
     * @access public
     */
    public $RecipientName = null;

    /**
     * @var string $RecipientEmailAddress
     * @access public
     */
    public $RecipientEmailAddress = null;

    /**
     * @param string $RecipientName
     * @param string $RecipientEmailAddress
     * @access public
     */
    public function __construct($RecipientName, $RecipientEmailAddress)
    {
      $this->RecipientName = $RecipientName;
      $this->RecipientEmailAddress = $RecipientEmailAddress;
    }

}
