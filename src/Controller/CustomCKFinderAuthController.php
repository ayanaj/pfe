<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomCKFinderAuthController extends AbstractController
{
    /**
     * @Route("/custom/c/k/finder/auth", name="custom_c_k_finder_auth")
     */
    public function index()
    {
        return $this->render('custom_ck_finder_auth/index.html.twig', [
            'controller_name' => 'CustomCKFinderAuthController',
        ]);
    }
}
