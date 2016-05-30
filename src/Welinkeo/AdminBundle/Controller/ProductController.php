<?php

namespace Welinkeo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }

	public function StoreAction()
    {

        return $this->render('AdminBundle:Admin:product.html.twig');
    }

}
