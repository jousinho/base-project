<?php
// src/Infrastructure/Http/ProductController.php
namespace App\Infrastructure\Http;

use App\Application\UseCase\CreateProductUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    #[Route('/products', name: 'create_product', methods: ['GET'])]
    public function create(CreateProductUseCase $useCase): JsonResponse
    {
        $product = $useCase->execute('Ejemplo de producto');
        return new JsonResponse([
            'id' => $product->getId(),
            'name' => $product->getName()
        ]);
    }
}