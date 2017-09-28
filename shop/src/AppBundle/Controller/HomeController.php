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
    public function indexAction()
    {


        $user = $this->getUser();
//        var_dump($user);die();
        $list = $this->getDoctrine()->getRepository("AppBundle:Product");
        $rs = $list->findBy(array('userid' => $user->getId()));
        // replace this example code with whatever you need
        return $this->render('authentication/home.html.twig',[
            'result' =>$rs
        ]);
    }
}
