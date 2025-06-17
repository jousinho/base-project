<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/status', name: 'module1_status')]
    public function status(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}