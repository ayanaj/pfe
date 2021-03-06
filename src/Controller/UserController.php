<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
            "isPhoto"=>false,
            "isAlbum"=>false,
            "isFavoris"=>false,
            "isLivre"=>false
        ]);
    }

  
}
    
