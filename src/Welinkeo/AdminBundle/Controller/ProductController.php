<?php

namespace Welinkeo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
    	$request = $this->getRequest();

    	if($request->getMethod() == 'POST'){
    		$session = get('session');
    		$session->setFlash('info',"L'article a bien été ajouté");

    		return $this->redirect($this->generateUrl('admin_homepage'));
    	}
        return $this->render('AdminBundle:Admin:product.html.twig');
    }

	public function StoreAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }

}
