<?php

namespace App\Services;

use App\Contracts\FirstContract;
use App\Contracts\SecondContract;
use App\Contracts\ThirdContract;

class SecondService implements SecondContract
{
    private $first;
    private $third;

    public function __construct(FirstContract $first, ThirdContract $third)
    {
        $this->first = $first;
        $this->third = $third;
    }

    public function getSecond()
    {
        return $this->first->getFirst() + $this->third->getThird();
    }
}