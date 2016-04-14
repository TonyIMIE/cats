<?php

namespace CHATONDL13Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CHATONDL13Bundle:Default:index.html.twig');
    }

   /**
    * @Route("/miauler")
    */
   public function miauleAction()
   {
       return new Response('Miouuu');
   }

   /**
    * @Route("/manger")
    */
   public function mangeAction()
   {
       return new Response('Miam');
   }
}
