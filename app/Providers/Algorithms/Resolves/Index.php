<?php

namespace App\Providers\Algorithms\Resolves;

class Index extends Resolve
{

    public function run()
    {
        $input = $this->request->all();

        return 'ok';
    }
}