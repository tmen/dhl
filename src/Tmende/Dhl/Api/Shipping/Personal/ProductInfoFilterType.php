<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ProductInfoFilterType
{

    /**
     * @var string $countryFilter
     * @access public
     */
    public $countryFilter = null;

    /**
     * @var string $productGroupFilter
     * @access public
     */
    public $productGroupFilter = null;

    /**
     * @var string $productFilter
     * @access public
     */
    public $productFilter = null;

    /**
     * @var boolean $viewEKP
     * @access public
     */
    public $viewEKP = true;

    /**
     * @var boolean $viewAdditionalAttributes
     * @access public
     */
    public $viewAdditionalAttributes = true;

    /**
     * @var boolean $viewPrice
     * @access public
     */
    public $viewPrice = true;

    /**
     * @var boolean $viewFuturePrices
     * @access public
     */
    public $viewFuturePrices = false;

    /**
     * @var boolean $viewDisplayText
     * @access public
     */
    public $viewDisplayText = true;

    /**
     * @var boolean $viewDimension
     * @access public
     */
    public $viewDimension = true;

    /**
     * @var boolean $viewFeatures
     * @access public
     */
    public $viewFeatures = true;

    /**
     * @var boolean $viewTransitions
     * @access public
     */
    public $viewTransitions = true;

    /**
     * @var boolean $noXmlCompression
     * @access public
     */
    public $noXmlCompression = false;

    /**
     * @var int $maxWeigth
     * @access public
     */
    public $maxWeigth = null;

    /**
     * @param array $properties
     * @access public
     */
    public function __construct(Array $properties)
    {
		foreach ($properties as $key => $value) {
			$this->{$key} = $value;
		}
    }

}
