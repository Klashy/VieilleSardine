<?php

namespace VieilleSardine\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction()
    {
        return $this->render('VieilleSardineProduitBundle::layout_produit.html.twig');
    }
    
    public function ajoutAction()
    {
        return $this->render('VieilleSardineProduitBundle:Produit:ajout_produit.html.twig');
    }
}
