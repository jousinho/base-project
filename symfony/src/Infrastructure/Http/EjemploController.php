<?php
namespace App\Infrastructure\Http;

use App\Application\UseCase\EjemploUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EjemploController
{
    #[Route('/api/ejemplo', name: 'ejemplo_action', methods: ['POST'])]
    public function ejemplerizar(Request $request, EjemploUseCase $useCase): JsonResponse
    {
        $input = json_decode(file_get_contents('php://input'), true);
        $result = $useCase->execute($input);

        return new JsonResponse($result);
    }
}