<?php
/**
 * Created by PhpStorm.
 * User: huytd
 * Date: 9/29/17
 * Time: 2:39 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Shape;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductCharController extends Controller
{
    /**
     * @Route("/productChar/{id}/{name}", name="product-characteristic")
     */
    public function showAction($id, $name){
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }
        $productList = $this->getDoctrine()->getRepository(Product::class)->findBy(array('idStudy'=>$id));
        $shapeList = $this->getDoctrine()->getRepository(Shape::class)->findAll();
        return $this->render('productChar/productCharacteristic.html.twig', [
                'listShape'=> $shapeList,
                'showId' => count($productList) ? $productList[0] : null,
                'studyName' => $name
            ]);
    }
    /**
     * @Route("/createModify", name="create-modify-product")
     */
    public function createModiProAction(Request $request){

    }

}