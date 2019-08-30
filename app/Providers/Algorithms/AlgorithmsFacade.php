<?php

namespace App\Providers\Algorithms;

use Illuminate\Support\Facades\Facade;

class AlgorithmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'algorithms';
    }
}