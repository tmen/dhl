<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ItemErrorsType
{

    /**
     * @var ItemErrorType[] $ItemError
     * @access public
     */
    public $ItemError = null;

    /**
     * @param ItemErrorType[] $ItemError
     * @access public
     */
    public function __construct($ItemError)
    {
      $this->ItemError = $ItemError;
    }

}
