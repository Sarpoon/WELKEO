<?php

namespace Welinkeo\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class CartController extends Controller
{
    
    public function cartShowAction()
    {

        return $this->render('MainBundle:Public:cart.html.twig');
    }
    
    
    
    public function cartStoreAction($id,$quantity)
    {
       
        $session = $this->getRequest()->getSession();
        
        //If session has no cart -> create it
        if(!$session->has('cart'))
        {
            $session->set('cart' ,array('id' => array(), 'quantity' => array()));
        }
        
        //get cart
        $cart = $session->get('cart');
        
        //If the product already exist we add the quantity
        $positionProduct = array_search($id,  $cart['id']);
       
        if ($positionProduct !== false){
           $cart['id'][$positionProduct] += $quantity ;
        }
        else{
           //else we push cart items
            array_push($cart['id'], $id);
            array_push($cart['quantity'],$quantity); 
        }
        
        return $this->redirectToRoute('Main_alimentaire');
    }
    
    public function cartEditAction($id,$quantity)
    {
        var_dump($id);
        var_dump($quantity);

        return $this->redirectToRoute('Main_alimentaire');
    }
    
    public function cartDeleteAction($id)
    {
        var_dump($id);

        return $this->redirectToRoute('Main_alimentaire');
    }
}
?>