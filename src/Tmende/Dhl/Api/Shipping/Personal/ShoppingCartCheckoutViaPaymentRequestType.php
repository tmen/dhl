<?php namespace Tmende\Dhl\Api\Shipping\Personal;

use Tmende\Dhl\Api\Shipping\Personal\ShoppingCartCheckoutBaseRequestType;

class ShoppingCartCheckoutViaPaymentRequestType extends ShoppingCartCheckoutBaseRequestType
{

    /**
     * @var PartnerBackLinksType $PartnerBackLinks
     * @access public
     */
    public $PartnerBackLinks = null;

    /**
     * @param AuthType $Auth
     * @param int $detailFlags
     * @param VersionType $version
     * @param ShoppingCartIdentificationType $ShoppingCartIdentification
     * @param BuyShoppingCartType $BuyShoppingCart
     * @param DirectLabelInfoType $DirectLabelInfo
     * @param PartnerBackLinksType $PartnerBackLinks
     * @access public
     */
    public function __construct($Auth, $detailFlags, $version, $ShoppingCartIdentification, $BuyShoppingCart, $DirectLabelInfo, $PartnerBackLinks)
    {
      parent::__construct($Auth, $detailFlags, $version, $ShoppingCartIdentification, $BuyShoppingCart, $DirectLabelInfo);
      $this->PartnerBackLinks = $PartnerBackLinks;
    }

}
