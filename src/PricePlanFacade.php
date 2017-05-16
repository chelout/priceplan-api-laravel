<?php

namespace PricePlanLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PricePlanLaravel\PricePlanClass
 */
class PricePlanFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'priceplan';
    }
}
