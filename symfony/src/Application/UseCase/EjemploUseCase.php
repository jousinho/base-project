<?php
namespace App\Application\UseCase;

use App\Domain\Repository\ExampleRepositoryInterface;

class EjemploUseCase
{
    public function __construct(
        private ExampleRepositoryInterface $repository
    ) {}

    public function execute(array $input): array
    {
        // 1. Lógica de aplicación (validación, orchestación)
        if (empty($input['key'])) {
            throw new \InvalidArgumentException("Input inválido");
        }

        // 2. Llama al dominio (a través del repositorio/interfaces)
        $this->repository->save($input);

        // 3. Retorna resultado (podría ser un DTO)
        return ['status' => 'success', 'data' => $input];
    }
}