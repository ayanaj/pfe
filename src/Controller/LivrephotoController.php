<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LivrephotoController extends AbstractController
{
    /**
     * @Route("/livrephoto", name="livrephoto")
     */
    public function index()
    {
        return $this->render('livrephoto/livrephoto.html.twig', [
            'controller_name' => 'LivrephotoController',
            "isPhoto"=>false,
            "isAlbum"=>false,
            "isFavoris"=>false,
            "isLivre"=>true
        ]);
    }
}
