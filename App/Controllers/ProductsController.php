<?php

namespace App\Controllers;

use App\Models\Product;
use App\Repositories\ProductsRepository;
use App\Repositories\UserRepository;
use App\Services\DefaultService;

class ProductsController
{
    public function show()
    {
        $productsRepository = new ProductsRepository();
        $allProducts = $productsRepository->getAll();
        return require_once __DIR__ . '/../Views/ProductsView.php';
    }

    public function add()
    {
        $productsRepository = new ProductsRepository();
        $product = new Product($_POST['pname'], $_POST['amount'], $_POST['price'], null);
        if ($productsRepository->isStored($product)) {
            $error = "Product already stored";
            $allProducts = $productsRepository->getAll();
            return require_once __DIR__ . '/../Views/ProductsView.php';
        } else {
            $productsRepository->storeOne($product);
            header('Location: /products');
        }


    }

    public function delete()
    {
        $productsRepository = new ProductsRepository();
        $productsRepository->delete($_POST['id']);

        header('Location: /products');
    }

    public function edit()
    {
        return require_once __DIR__ . '/../Views/EditView.php';
    }

}