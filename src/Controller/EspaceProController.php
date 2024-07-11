<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EspaceProController extends AbstractController
{
    #[Route('/', name: 'app_espace_pro')]
    public function index(): Response
    {
        return $this->render('espace_pro/index.html.twig', [
            'controller_name' => 'EspaceProController',
        ]);
    }
}
