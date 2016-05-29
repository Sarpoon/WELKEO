<?php

namespace Welinkeo\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    public function indexAction()
    {
    	return $this->render('MainBundle:Public:index.html.twig',array(
    		'articles' => array(
	    			array(
			    		'titre' => "ouverture de welinkeo!",
			    		'auteur' => array(
			    			'username' => "Sarpoon",
			    			'id'=> 1,
			    			'nbProduits' => 12,
			    			),
			    		'contenu' => "contenu de l'article",
			    		'date' => new \DateTime(),
						),
					array(
			    		'titre' => "déclinaison de welinkeo!",
			    		'auteur' => array(
			    			'username' => "Sarpoon",
			    			'id'=> 1,
			    			'nbProduits' => 12,
			    			),
			    		'contenu' => "contenu de l'article",
			    		'date' => new \DateTime(),
						),
					array(
			    		'titre' => "fermeture de welinkeo!",
			    		'auteur' => array(
			    			'username' => "Sarpoon",
			    			'id'=> 1,
			    			'nbProduits' => 12,
			    			),
			    		'contenu' => "contenu de l'article",
			    		'date' => new \DateTime(),
						),	
				),
    		));
    }

    public function alimentaireIndexAction()
    {
    	/*	Fonction Recherche + fonction tri catégories
    		
    		Database query depends on search option 

    		Return with all infos 
    	*/


    	return $this->render('MainBundle:Public:alimentaire.html.twig');
    }
}
?>