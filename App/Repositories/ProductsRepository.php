<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    public function getAll(): array
    {

        $allProducts = query()
            ->select('*')
            ->from('products')
            ->execute()
            ->fetchAllAssociative();

        foreach($allProducts as $product){
            $allProductsModels[] = new Product($product['name'],$product['amount'],$product['unit_price'],$product['id']);
        }

        return $allProductsModels;
    }

    public function storeOne(Product $product): void
    {
        query()
            ->insert('products')
            ->values([
                'name' => ':name',
                'amount' => ':amount',
                'unit_price' => ':unitPrice',
            ])
            ->setParameters([
                'name' => $product->getName(),
                'amount' => $product->getAmount(),
                'unitPrice' => $product->getUnitPrice()
            ])
            ->execute();
    }

    public function isStored(Product $product): bool
    {
        $query = query()
            ->select('*')
            ->from('products')
            ->where('name = :name')
            ->setParameter(':name', $product->getName())
            ->execute()
            ->fetchAssociative();

        if ($query == false) {
            return false;
        }
        return true;
    }

    public function delete(string $id): void
    {
        $id = (int)$id;
        $statement = database()->prepare("DELETE FROM products WHERE id = '$id'");
        $statement->execute();
    }

    public function updateStored(Product $product): void
    {
        query()
            ->update('products')
            ->set('name', ':name')
            ->set('amount', ':amount')
            ->set('unit_price', ':unitPrice')
            ->where('id = :id')
            ->setParameter(':name', $product->getName())
            ->setParameter(':amount', $product->getAmount())
            ->setParameter(':unitPrice', $product->getUnitPrice())
            ->setParameter(':id', $product->getId())

            ->execute();

    }


}