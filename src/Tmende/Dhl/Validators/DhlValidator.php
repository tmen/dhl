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
    	$charArray = str_split($value);
    	$charArrayLength = count($charArray);
    	$checkSum = 0;

    	for ($i=0 ; $i < $charArrayLength-1 ; $i++ ) {
    		$multiplikator = ($i % 2) ? 1 : 3;
    		$checkSum += $charArray[$i] * $multiplikator;
    	}

    	if (($checkSum % 10) != $charArray[$charArrayLength-1] ) {
    		return false;
    	}

    	return true;
    }
}