<?php
namespace App\Application\UseCase;

use App\Domain\Repository\ProductRepositoryInterface;

class GetProductUseCase
{
    public function __construct(
        private ProductRepositoryInterface $repository
    ) {}

    public function execute(int $id): ?array
    {
        $product = $this->repository->findById($id);
        
        return $product ? [
            'id' => $product->getId(),
            'name' => $product->getName()
        ] : null;
    }
}