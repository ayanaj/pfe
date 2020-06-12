<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use CKSource\Bundle\CKFinderBundle\Authentication\Authentication as AuthenticationBase;

class AlbumController extends AbstractController
{
    /**
     * @Route("/album", name="album")
     */
    public function index()
    {
        return $this->render('album/album.html.twig', [
            'controller_name' => 'AlbumController',
            "isPhoto"=>false,
            "isAlbum"=>true,
            "isFavoris"=>false,
            "isLivre"=>false
        ]);
    }
}
