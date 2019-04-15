<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Auteurs;
use App\Repository\AuteursRepository;

class BdController extends AbstractController
{
    /**
     * @Route("/auteurs", name="auteurs_bd")
     */
    public function auteurs(AuteursRepository $repo)
    {
      $allAuteur = $repo->findAll();
      return $this->render('bd/auteurs.html.twig', array('auteurs'=> $allAuteur));
    }

     /**
     * @Route("/", name="home")
     */
    public function home()
    {

      return $this->render('bd/home.html.twig', ['title' =>'Bienvenue sur mon site symfony', 'age' => 35]);
    }
     /**
     * @Route("/genres", name="genres_bd")
     */
    public function genres()
    {
        return $this->render('bd/genres.html.twig', [
            'controller_name' => 'BdController',
        ]);
    }
     /**
     * @Route("/contact", name="contact_bd")
     */

    public function contact()
    {
        return $this->render('bd/contact.html.twig', [
            'controller_name' => 'BdController',
        ]);
    }
}
