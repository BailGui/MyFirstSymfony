<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
# use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    // attributs devenus inutiles #[Route('/json', name: 'app_first')]
    public function myJson(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
