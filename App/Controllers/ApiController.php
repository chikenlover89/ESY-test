<?php

namespace App\Controllers;

use App\Repositories\ProductsRepository;
use App\Repositories\UserRepository;
use App\Services\DefaultService;

class ApiController
{
    public function show()
    {
        $repository = new ProductsRepository();
        $apiAll = json_encode($repository->getAll());
        return require_once __DIR__ . '/../Views/ApiView.php';
    }

}