<?php

namespace Welinkeo\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

class PublicController extends Controller
{
    public function indexAction()
    {
    	return $this->render('MainBundle:Public:index.html.twig');
    }

    public function alimentaireIndexAction()
    {
    	/*	Fonction Search + fonction sort by catégories
    		
    		Database query depends on search option 

    		Return with all infos 
    	*/
        
        $repositoryProducts = $this->getDoctrine()
            ->getRepository('MainBundle:Product');

        /*
        $query = $repository->createQueryBuilder('p')
            ->where('p.price > :price')
            ->setParameter('price', '19.99')
            ->orderBy('p.price', 'ASC')
            ->getQuery();
        */


        // find *all* products
        $productsquery = $repositoryProducts->findAll();


    	return $this->render('MainBundle:Public:alimentaire.html.twig',array(
            'products' => $productsquery,
        ));
    }

    public function cartStoreAction($id,$volume)
    {
        var_dump($id);
        var_dump($volume);

        return $this->redirectToRoute('Main_alimentaire');
    }
}
?>