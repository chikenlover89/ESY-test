<?php

namespace App\Controllers;

use App\Repositories\UserRepository;
use App\Services\DefaultService;

class WelcomeController
{
    public function index()
    {

        return require_once __DIR__ . '/../Views/WelcomeView.php';
    }

}