<?php

namespace App\Services;

use App\Contracts\ThirdContract;

class ThirdService implements ThirdContract
{
    public function getThird()
    {
        return 3000;
    }
}