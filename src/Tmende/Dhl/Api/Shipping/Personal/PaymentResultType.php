<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class PaymentResultType
{

    /**
     * @var string $key
     * @access public
     */
    public $key = null;

    /**
     * @var string $value
     * @access public
     */
    public $value = null;

    /**
     * @param string $key
     * @param string $value
     * @access public
     */
    public function __construct($key, $value)
    {
      $this->key = $key;
      $this->value = $value;
    }

}
