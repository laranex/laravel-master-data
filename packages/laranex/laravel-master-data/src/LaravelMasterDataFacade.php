<?php

namespace Laranex\LaravelMasterData;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laranex\LaravelMasterData\Skeleton\SkeletonClass
 */
class LaravelMasterDataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-master-data';
    }
}
