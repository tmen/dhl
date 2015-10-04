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
    public $viewEKP = null;

    /**
     * @var boolean $viewAdditionalAttributes
     * @access public
     */
    public $viewAdditionalAttributes = null;

    /**
     * @var boolean $viewPrice
     * @access public
     */
    public $viewPrice = null;

    /**
     * @var boolean $viewFuturePrices
     * @access public
     */
    public $viewFuturePrices = null;

    /**
     * @var boolean $viewDisplayText
     * @access public
     */
    public $viewDisplayText = null;

    /**
     * @var boolean $viewDimension
     * @access public
     */
    public $viewDimension = null;

    /**
     * @var boolean $viewFeatures
     * @access public
     */
    public $viewFeatures = null;

    /**
     * @var boolean $viewTransitions
     * @access public
     */
    public $viewTransitions = null;

    /**
     * @var boolean $noXmlCompression
     * @access public
     */
    public $noXmlCompression = null;

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
