<?php
    // src/Infrastructure/Http/TestController.php
    namespace App\Controller;

    use App\Domain\Model\Pedido;
    use Symfony\Component\HttpFoundation\Response;

    class TestController
    {
        #[Route('/pedido', name: 'module_pedido')]
        public function test(): Response
        {
            $pedido = new Pedido();
            return new Response("Pedido ID: " . $pedido->getId());
        }
    }