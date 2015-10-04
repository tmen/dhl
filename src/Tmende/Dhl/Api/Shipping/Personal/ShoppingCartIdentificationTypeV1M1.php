<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartIdentificationType;

class ShoppingCartIdentificationTypeV1M1 extends ShoppingCartIdentificationType
{

    /**
     * @var anonymous93 $customerItemReference
     * @access public
     */
    public $customerItemReference = null;

    /**
     * @param string $shoppingCartId
     * @param anonymous68 $customerReference
     * @param string $nextShoppingCartId
     * @param anonymous93 $customerItemReference
     * @access public
     */
    public function __construct($shoppingCartId, $customerReference, $nextShoppingCartId, $customerItemReference)
    {
      parent::__construct($shoppingCartId, $customerReference, $nextShoppingCartId);
      $this->customerItemReference = $customerItemReference;
    }

}
