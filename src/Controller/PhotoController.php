<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PhotoController extends AbstractController
{
    /**
     * @Route("/photo", name="photo")
     */
    public function index()
    {
        return $this->render('photo/photo.html.twig', [
            'controller_name' => 'PhotoController',
            "isPhoto"=>true,
            "isAlbum"=>false,
            "isFavoris"=>false,
            "isLivre"=>false
        ]);
    }
}
