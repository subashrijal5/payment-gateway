<?php

namespace Subash\Payment;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Subash\Payment\Skeleton\SkeletonClass
 */
class PaymentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payment';
    }
}
