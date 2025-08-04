<?php
namespace App\Application\UseCase;

use App\Domain\Model\Product;
use App\Domain\Repository\ExampleRepositoryInterface;

class EjemploUseCase
{
    public function __construct(
        private ExampleRepositoryInterface $repository
    ) {}

    /**
     * @throws \InvalidArgumentException
     */
    public function execute(string $input): string
    {
        // 1. Lógica de aplicación (validación, orchestación)
        if (empty($input)) {
            throw new \InvalidArgumentException('input invalido');
        }

        $product = new Product($input);

        // 2. Llama al dominio (a través del repositorio/interfaces)
        $this->repository->save($product);

        // 3. Retorna resultado (podría ser un DTO)
        // $input = 'hola';
        return $input;
        //return ['status' => 'success', 'data' => $input];
    }
}