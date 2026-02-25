<?php

namespace App\Http\Controllers;

use App\Services\LogService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $service;
    protected $logService;

    public function __construct(
        UserService $service,
        LogService $logService)
    {
        $this->service = $service;
        $this->logService = $logService;
    }

    public function index()
    {
       $name = $this->service->getUserName();
       return $this->logService->log($name);
    }

}
