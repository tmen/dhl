<?php namespace Tmende\Dhl\Api\Shipping\Personal;

class ShoppingCartIdentificationType
{

    /**
     * @var string $shoppingCartId
     * @access public
     */
    public $shoppingCartId = null;

    /**
     * @var anonymous68 $customerReference
     * @access public
     */
    public $customerReference = null;

    /**
     * @var string $nextShoppingCartId
     * @access public
     */
    public $nextShoppingCartId = null;

    /**
     * @param string $shoppingCartId
     * @param anonymous68 $customerReference
     * @param string $nextShoppingCartId
     * @access public
     */
    public function __construct($shoppingCartId, $customerReference, $nextShoppingCartId)
    {
      $this->shoppingCartId = $shoppingCartId;
      $this->customerReference = $customerReference;
      $this->nextShoppingCartId = $nextShoppingCartId;
    }

}
