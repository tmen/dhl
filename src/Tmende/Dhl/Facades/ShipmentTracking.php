<?php namespace Tmende\Dhl\Facades;

use Illuminate\Support\Facades\Facade;

class ShipmentTracking extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'shipmenttracking'; }

}