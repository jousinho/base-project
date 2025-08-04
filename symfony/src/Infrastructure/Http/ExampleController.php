<?php

// src/Infrastructure/Http/ExampleController.php
namespace App\Infrastructure\Http;

use App\Domain\Model\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Domain\Repository\ExampleRepositoryInterface;

class ExampleController extends AbstractController
{
    public function __construct(
        private ExampleRepositoryInterface $repository
    ) {}

    #[Route('/example', name: 'module_example')]
    public function __invoke(): Response
    {

        $product = new Product('minombre');
        $this->repository->save($product);
        return new Response("OK");
    }
}