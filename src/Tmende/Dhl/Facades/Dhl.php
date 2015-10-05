<?php namespace Tmende\Dhl\Facades;

use Illuminate\Support\Facades\Facade;

class Dhl extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'dhl'; }

}