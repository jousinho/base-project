<?php

// src/Domain/Repository/ExampleRepositoryInterface.php
namespace App\Domain\Repository;

use App\Domain\Model\Product;
use App\Domain\Repository;

interface ExampleRepositoryInterface
{
    public function save(Product $product): void;
    public function all(): array;
    public function findById(int $id): ?Product;
}