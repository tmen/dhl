<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemErrorType
{

    /**
     * @var int $itemId
     * @access public
     */
    public $itemId = null;

    /**
     * @var boolean $printable
     * @access public
     */
    public $printable = null;

    /**
     * @var string $i18nkey
     * @access public
     */
    public $i18nkey = null;

    /**
     * @var boolean $detailed
     * @access public
     */
    public $detailed = null;

    /**
     * @var anonymous48 $messageType
     * @access public
     */
    public $messageType = null;

    /**
     * @var string $message
     * @access public
     */
    public $message = null;

    /**
     * @param int $itemId
     * @param boolean $printable
     * @param string $i18nkey
     * @param boolean $detailed
     * @param anonymous48 $messageType
     * @param string $message
     * @access public
     */
    public function __construct($itemId, $printable, $i18nkey, $detailed, $messageType, $message)
    {
      $this->itemId = $itemId;
      $this->printable = $printable;
      $this->i18nkey = $i18nkey;
      $this->detailed = $detailed;
      $this->messageType = $messageType;
      $this->message = $message;
    }

}
