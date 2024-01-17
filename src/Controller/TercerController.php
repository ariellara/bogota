<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TercerController extends AbstractController
{
    #[Route('/tercer', name: 'app_tercer')]
    public function index(): Response
    {
        return $this->render('tercer/index.html.twig', [
            'controller_name' => 'TercerController',
        ]);
    }
}
