<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FavorisController extends AbstractController
{
    /**
     * @Route("/favoris", name="favoris")
     */
    public function index()
    {
        return $this->render('favoris/favoris.html.twig', [
            'controller_name' => 'FavorisController',
            "isPhoto"=>false,
            "isAlbum"=>false,
            "isFavoris"=>true,
            "isLivre"=>false
        ]);
    }
}
