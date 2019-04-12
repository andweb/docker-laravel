<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }


    public function index()
    {
        //dd($this->users->getUsers());
    }
}
