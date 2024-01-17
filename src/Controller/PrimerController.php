<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Usuario;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PrimerController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    #[Route('/primer/{id}', name: 'app_primer')]
    public function index($id): Response
    {
        $resultado = $this->em->getRepository(usuario::class)->findBy(['nombre' => $id]);
        return $this->render('primer/index.html.twig', [
            'controller_name' => 'bogota',
            'parametro_2' => 'test2',
            'resultados' => $resultado

        ]);
    }
    #[Route('/insertarUsuarios', name: 'app_insertarUsuarios')]
    public function insertarUsuarios()
    {
        $usuario = new Usuario();
        $usuario
        ->setId(1)
        -> setNombre('Meliza');

        $this->em->persist($usuario);
        $this->em->flush();
        return new JsonResponse(['success'=>true]);


    }
}
