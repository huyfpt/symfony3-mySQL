<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
     /**
     * @Route("/home", name="wellcome")
     */
     public function indexAction (){
     return $this->render('authentication/home.html.twig');
     }

}