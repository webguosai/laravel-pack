<?php

namespace Webguosai\LaravelPack\Facades;

use Illuminate\Support\Facades\Facade;

class Pack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pack';
    }
}
