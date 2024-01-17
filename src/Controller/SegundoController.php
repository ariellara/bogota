<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SegundoController extends AbstractController
{
    #[Route('/segundo', name: 'app_segundo')]
    public function index(): Response
    {
        return $this->render('segundo/index.html.twig', [
            'controller_name' => 'SegundoController',
        ]);
    }
}
