<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getUsers()
    {
        return User::all();
    }
}
