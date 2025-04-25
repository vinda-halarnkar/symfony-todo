<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function todo(): Response
    {
        return $this->render('todo.html.twig');
    }
}
