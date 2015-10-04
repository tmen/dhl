<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ReferenceType;

class PriceType extends ReferenceType
{

    /**
     * @var AmountType $bruttoPrice
     * @access public
     */
    public $bruttoPrice = null;

    /**
     * @var VatType $vat
     * @access public
     */
    public $vat = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var int $pk
     * @access public
     */
    public $pk = null;

    /**
     * @var string $country
     * @access public
     */
    public $country = null;

    /**
     * @var dateTime $startTime
     * @access public
     */
    public $startTime = null;

    /**
     * @var dateTime $endTime
     * @access public
     */
    public $endTime = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param AmountType $bruttoPrice
     * @param VatType $vat
     * @param string $name
     * @param int $pk
     * @param string $country
     * @param dateTime $startTime
     * @param dateTime $endTime
     * @access public
     */
    public function __construct($id, $idref, $bruttoPrice, $vat, $name, $pk, $country, $startTime, $endTime)
    {
      parent::__construct($id, $idref);
      $this->bruttoPrice = $bruttoPrice;
      $this->vat = $vat;
      $this->name = $name;
      $this->pk = $pk;
      $this->country = $country;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
    }

}
