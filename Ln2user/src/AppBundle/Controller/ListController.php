<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
	
    /**
     * @Route("/home", name="welcome")
     */
	public function showAction()
	{
		$detail = $this->getDoctrine()
        ->getRepository('AppBundle:Ln2user')
        ->find($id);
        return $this->render('admintration/home.html.twig', array(
            'showdetail' => $detail
            ));
	}
}
