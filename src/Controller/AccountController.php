<?php

namespace App\Controller;
use  App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\RegistrationType;
class AccountController extends AbstractController
{
    /**
     * @Route("/login", name="account_login")
     * 
     * @return Response
     * 
     */
    public function login()
    {
        return $this->render('account/login.html.twig');
    }


     /**
     * @Route("/logout", name="account_logout")
     * 
     * @return void
     * 
     */

    public function logout()
    {
     //nothing  
    }

    /**
     * @Route("/register", name="account_register")
     * 
     * @return Response
     * 
     */
    public function register()
    {
        return $this->render('account/registration.html.twig');


    }
    


}
