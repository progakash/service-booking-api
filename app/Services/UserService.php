<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function getAllUser()
    {
        return $this->userRepo->all();
    }

    public function message(): string
    {
        return "User service working";
    }

    public function getUserName()
    {
        return "Md Akash";
    }
}
