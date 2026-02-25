<?php
namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function all()
    {
        return ['akash', 'aaira', 'anaya', 'naher'];
    }
}
