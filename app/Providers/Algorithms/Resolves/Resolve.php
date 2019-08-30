<?php

namespace App\Providers\Algorithms\Resolves;

abstract class Resolve
{
    protected $request;

    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    abstract public function run();
}