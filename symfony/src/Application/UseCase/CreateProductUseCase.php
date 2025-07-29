<?php
// src/Application/UseCase/CreateProductUseCase.php
namespace App\Application\UseCase;

use App\Domain\Model\Product;
use App\Domain\Repository\ProductRepositoryInterface;

class CreateProductUseCase
{
    public function __construct(
        private ProductRepositoryInterface $repository
    ) {}

    public function execute(string $productName): Product
    {
        $product = new Product($productName);
        $this->repository->save($product);
        return $product;
    }
}