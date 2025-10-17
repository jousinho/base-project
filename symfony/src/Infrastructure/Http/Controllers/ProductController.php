<?php
// src/Infrastructure/Http/ProductController.php
namespace App\Infrastructure\Http\Controllers;

use App\Application\UseCase\CreateProductUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    #[Route('/products', name: 'create_product', methods: ['POST'])]
    public function create(CreateProductUseCase $useCase): JsonResponse
    {
        $product = $useCase->execute('Ejemplo de producto');
        return new JsonResponse([
            'id' => $product->getId(),
            'name' => $product->getName()
        ]);
    }

    #[Route('/products/{id}', name: 'get_product', methods: ['GET'])]
    public function get(int $id, GetProductUseCase $useCase): JsonResponse
    {
        $product = $useCase->execute($id);
        
        if (!$product) {
            return new JsonResponse(['error' => 'Product not found'], 404);
        }
        
        return new JsonResponse($product);
    }
}