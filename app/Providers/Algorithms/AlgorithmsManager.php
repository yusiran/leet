<?php

namespace App\Providers\Algorithms;

use Illuminate\Support\Manager;
use App\Providers\Algorithms\Resolves\Index;

class AlgorithmsManager extends Manager
{

    protected function createDriver($driver) {
        $driver = config('algorithms.resolves.' . strtolower($driver));
        if (class_exists($driver)) {
            return new $driver;
        }
        return $this->getDefaultDriver();
    }

    public function getDefaultDriver() {
        return new Index();
    }
}