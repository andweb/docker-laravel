<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Contracts\FirstContract;
use App\Contracts\SecondContract;
use App\Services\SecondService;
use App\Contracts\ThirdContract;
use Illuminate\Http\Request;

class MyController extends Controller
{
    private $firstService;
    private $secondService;
    private $thirdService;

    public function __construct(FirstContract $firstService, SecondContract $secondService, ThirdContract $thirdService)
    {
        $this->firstService = $firstService;
        $this->secondService = $secondService;
        $this->thirdService = $thirdService;
    }

    public function index()
    {
        //dd($this->firstService->getFirst());
        dd($this->secondService->getSecond());
        //dd($this->thirdService->getThird());
    }
}
