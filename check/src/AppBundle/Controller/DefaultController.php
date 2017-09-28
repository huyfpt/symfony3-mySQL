<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="todo_list")
     */
    public function showAction(Request $request)
    {
        $list = $this->getDoctrine()->getRepository('AppBundle:Entity')->findAll();
        return $this->render('default/index.html.twig', array(
            'details' => $list
        ));
    }
    /**
     * @Route("/new", name="todo_new")
     */
    public function createAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $create = new Entity();
        if ($request->isMethod('POST')) {
            $name = $request->request->get('_name');
            $cate =$request->request->get('r1');
            $des =$request->request->get('_option');
        $create->setName($name);
        $create->setCategory($cate);
        $create->setDescription($des);
        $em->persist($create);
        $em->flush();
            return $this->redirectToRoute('todo_list');
        }


        return $this->render('default/new.html.twig');
    }
    /**
     * @Route("/edit/{id}", name="todo_edit")
     */
    public function updateAction($id,Request $request){
        $em= $this->getDoctrine()->getRepository('AppBundle:Entity')->find($id);
        $em->getName();
        $em->getCategory();
        $em->getDescription();
        if ($request->isMethod('POST' )) {
            $db = $this->getDoctrine()->getManager();
            $name = $request->request->get('_name');
            $cate =$request->request->get('r1');
            $des =$request->request->get('_option');
            $em->setName($name);
            $em->setCategory($cate);
            $em->setDescription($des);
            $db->flush();
            return $this->redirectToRoute('todo_list');
        }
        return $this->render('default/edit.html.twig', [
                'updated' => $id,
                'user_info' => $em->getName(),
                'valueCate' => $em->getCategory(),
                'valueDes' => $em->getDescription()

        ]);
    }
    /**
     * @Route("/delete/{id}", name="delete_todo")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $del = $em->getRepository('AppBundle:Entity')->find($id);
            $em->remove($del);
            $em->flush();
        return $this->redirectToRoute('todo_list');
    }

}
