<?php

namespace ArcandiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProduitController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('ArcandiaBundle:Produit:sommaire.html.twig');
    }

    /**
     * @Route("/album/01", name="album01")
     */
    public function album01Action()
    {
        return $this->render('ArcandiaBundle:Produit:album-01.html.twig');
    }
}
