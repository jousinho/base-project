<?php
    // src/Infrastructure/Http/TestController.php
    namespace App\Infrastructure\Http;

    use App\Domain\Model\Pedido;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class TestController
    {
        #[Route('/pedido', name: 'module_pedido')]
        public function test(): Response
        {
            $pedido = new Pedido();
            return new Response("Pedido ID: " . $pedido->getId());
        }
    }