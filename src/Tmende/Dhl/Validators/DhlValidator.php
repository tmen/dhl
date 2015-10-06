<?php namespace Tmende\Dhl\Validators;

use Illuminate\Validation\Validator as IlluminateValidator;

class DhlValidator extends IlluminateValidator {

	private $_custom_messages = array(
        "trackingcode" => "Please enter a valid tracking code"
    );

    public function __construct($translator, $data, $rules, $messages = array(), $customAttributes = array())
    {
        parent::__construct($translator, $data, $rules, $messages, $customAttributes);

        $this->_set_custom_stuff();
    }

    /**
     * Initaliseren der Custom Messages
     *
     * @return void
     */
    protected function _set_custom_stuff()
    {
        //setup our custom error messages
        $this->setCustomMessages( $this->_custom_messages );
    }

     /**
     * Validate dhl tracking code
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    protected function validateTrackingcode($attribute, $value)
    {
    	return true;
    }
}