<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListController extends Controller
{
	/**
   * @Route("/list", name="welcome")
   */
	 public function showAction()
    {
        $list = $this->getDoctrine()
        ->getRepository('AppBundle:User')
        ->findAll();
        return $this->render('auth/list.html.twig', array(
            'key' => $list
            ));
    }
}
