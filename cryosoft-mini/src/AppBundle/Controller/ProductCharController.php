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

class ProductCharController extends Controller
{
    /**
     * @Route("/productChar/{id}/{name}", name="product-characteristic")
     */
    public function showAction($id, $name){
        $productList = $this->getDoctrine()->getRepository(Product::class)->findBy(array('id'=>$id));
        $shapeList = $this->getDoctrine()->getRepository(Shape::class)->findAll();
        return $this->render('productChar/productCharacteristic.html.twig', [
                'listShape'=> $shapeList,
                'showId' => count($productList) ? $productList[0] : null,
                'studyName' => $name
            ]);
    }
}