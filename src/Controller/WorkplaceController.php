<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WorkplaceController extends AbstractController
{
    /**
     * @Route("/workplace", name="workplace")
     */
    public function index()
    {
        return $this->render('workplace/index.html.twig', [
            'controller_name' => 'WorkplaceController',
        ]);
    }
}
