<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        if(empty($this->getUser())){
            return $this->redirectToRoute('fos_user_security_login');
        }else{
            return $this->redirectToRoute('workplace');
        }
    }
}
