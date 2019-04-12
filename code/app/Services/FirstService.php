<?php

namespace App\Services;

use App\Contracts\FirstContract;

class FirstService implements FirstContract
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getFirst()
    {
        return $this->a;
    }
}