<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Cate;
use AppBundle\Entity\Design;
use AppBundle\Entity\Product;
use AppBundle\Entity\Shape;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
class ProductController extends Controller
{


    /**
     * @Route("/new", name="create_newProduct")
     */
    public function createAction(Request $request)
    {
        $listCate = $this->getDoctrine()->getRepository("AppBundle:Cate")->findAll();
        $em = $this->getDoctrine()->getManager();
        $create = new Product();

        if($request->getMethod()=='POST')
        {
            $user = $this->getUser();
//            var_dump($user);die();
            $name = $request->get('_proName');
            $detail= $request->get('_details');
            $cate = $request->get('_cate');
            $status= $request->get('_status');
            $cates = $this->getDoctrine()
                    ->getRepository(Cate::class)
                    ->find($cate);
            if($cates == null){
                $cates = $this->getDoctrine()
                    ->getRepository(Cate::class)
                    ->find(1);
            }
            $create->setName($name);
            $create->setDetails($detail);
            $create->setCateid($cates);
            $create->setStatus($status);
            $create->setUserid($user);
            $em->persist($create);
            $em->flush();
            return $this->redirectToRoute('wellcome');
        }
        return $this->render('product/new.html.twig', [
            'cate' => $listCate
        ]);
    }


    /**
     * @Route("/load", name="load_Product")
     */
    public function loadAction(Request $request)
    {
        $user = $this->getUser();
//        $product = new Product();
        $list = $this->getDoctrine()->getRepository(Product::class);
        $listall = $this->getDoctrine()->getRepository(Cate::class)->findAll();
        $rs = $list->findBy(array('userid' => $user->getId()));
        if($request->getMethod()=='POST')
        {
            $pro_id = $request->get('id');
            $list1 = $this->getDoctrine()->getRepository(Product::class);
            $rs1 = $list1->findBy(array('productid'=> $pro_id));
               $ret = array(
                   'details' => $rs1[0]->getDetails(),
                   'cateid' =>$rs1[0]->getCateid()->getCateid(),
                   'status' =>$rs1[0]->getStatus(),
                   'productid'=>$pro_id,
                   'updateid'=>$pro_id);
            return new JsonResponse($ret);
        }
        return $this->render('product/load.html.twig', [
            'result' =>$rs,
            'cate' =>$listall,

        ]);
    }
    /**
     * @Route("/delete", name="delete")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $pro_id = $request->get('productid');
            $del = $em->getRepository(Product::class)->find($pro_id);
           if($pro_id != null){
               $em->remove($del);
               $em->flush();
               return $this->redirectToRoute('load_Product');
           }else{
               die("dddd");
           }
        }
        return $this->render('product/load.html.twig');
    }
    /**
     * @Route("/update", name="update")
     */
    public function updateAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            $pro_id = $request->get('productid');
            $up = $this->getDoctrine()->getRepository(Product::class)->find($pro_id);
            $status = $request->get('_statusload');
            $up->setStatus($status);
            $em->flush();
            return $this->redirectToRoute('load_Product');
        }
        return $this->render('product/load.html.twig');
    }
    /**
     * @Route("/define/{id}/{name}", name="define-product")
     */
    public function showAction($id, $name){
        $list = $this->getDoctrine()->getRepository(Shape::class)->findAll();
        $listDesign = $this->getDoctrine()->getRepository(Design::class)->findBy(array('proid'=>$id));
        return $this->render('product/show.html.twig', array(
            'listshape' => $list,
            'show' => count($listDesign) ? $listDesign[0] : null,
            'productname'=> $name,
//            'product_id' =>$id
        ));
    }

}