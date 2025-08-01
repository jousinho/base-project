<?php
// src/Domain/Repository/ProductRepositoryInterface.php
namespace App\Domain\Repository;

use App\Domain\Model\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): void;
    public function find(int $id): ?Product;
    public function findById(int $id): ?Product;
}