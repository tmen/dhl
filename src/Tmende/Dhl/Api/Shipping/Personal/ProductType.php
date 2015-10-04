<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\NamedReferenceType;

class ProductType extends NamedReferenceType
{

    /**
     * @var ProductDescType $ProductDesc
     * @access public
     */
    public $ProductDesc = null;

    /**
     * @var ServiceType[] $Service
     * @access public
     */
    public $Service = null;

    /**
     * @var string $collectionServices
     * @access public
     */
    public $collectionServices = null;

    /**
     * @param ID $id
     * @param IDREF $idref
     * @param string $name
     * @param ProductDescType $ProductDesc
     * @param ServiceType[] $Service
     * @param string $collectionServices
     * @access public
     */
    public function __construct($id, $idref, $name, $ProductDesc, $Service, $collectionServices)
    {
      parent::__construct($id, $idref, $name);
      $this->ProductDesc = $ProductDesc;
      $this->Service = $Service;
      $this->collectionServices = $collectionServices;
    }

}
