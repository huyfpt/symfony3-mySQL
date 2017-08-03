<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TodolistController extends Controller
{
    /**
     * @Route("/todos", name="list_todo")
     */
    public function listAction()
    {
        
        $list = $this->getDoctrine()
        ->getRepository('AppBundle:Entity')
        ->findAll();
        return $this->render('todo/list.html.twig', array(
            'todo' => $list
            ));
    }
    /**
     * @Route("/todos/create", name="create_todo")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();   
        $create = new Entity();
        
        $form = $this->createFormBuilder($create)
            //->add('due_date', DateTimeType::class, ['attr' => ['style' => 'margin-bottom: 15px;display: flex']])
            ->add('name', TextType::class,  array('attr'=> array('class' =>'form-control', 
                'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class,  array('attr'=> array('class' =>'form-control', 
                'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class,  array('attr'=> array('class' =>'form-control', '
                style' => 'margin-bottom:15px')))
            ->add('deu_date', DateTimeType::class, ['attr' => ['style' => 'margin-bottom: 15px;display: flex']])
            ->add('Save', SubmitType::class,  array('label'=> 'Create Todo','attr'=> array('class' =>'btn btn-success', 
                'style' => 'margin-bottom:15px')))
            ->getForm();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid())
            {
                //Get Data
                // $namevar = $form['name']->getData();
                // $catevar = $form['category']->getData();
                // $description = $form['description']->getData();
                // $deu_date = $form['deu_date']->getData();
                
                $now = new\DateTime('now');

                // $create->setName($namevar);
                // $create->setCategory($catevar);
                // $create->setDescription($description);
                // $create->setDeuDate($deu_date);
                $create->setCreateDate($now);

                

                $em->persist($create);
                $em->flush();

                $this->addFlash(
                    'Noitce',
                    'Todo Added'
                    );
                return $this->redirectToRoute('list_todo');

            }
        return $this->render('todo/create.html.twig', array(
                'formView' => $form->createView()
            ));
    }
    /**
     * @Route("/todos/edit/{id}", name="edit_todo")
     */
    public function editAction($id, Request $request)
    {
        $edit = $this->getDoctrine()
        ->getRepository('AppBundle:Entity')
        ->find($id);

                $edit->setName($edit->getName());
                $edit->setCategory($edit->getCategory());
                $edit->setDescription($edit->getDescription());
                $edit->setDeuDate($edit->getDeuDate());
               
             $form = $this->createFormBuilder($edit)
            //->add('due_date', DateTimeType::class, ['attr' => ['style' => 'margin-bottom: 15px;display: flex']])
            ->add('name', TextType::class,  array('attr'=> array('class' =>'form-control', 
                'style' => 'margin-bottom:15px')))
            ->add('category', TextType::class,  array('attr'=> array('class' =>'form-control', 
                'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class,  array('attr'=> array('class' =>'form-control', '
                style' => 'margin-bottom:15px')))
            ->add('deu_date', DateTimeType::class, ['attr' => ['style' => 'margin-bottom: 15px;display: flex']])
            ->add('Save', SubmitType::class,  array('label'=> 'Edit Todo','attr'=> array('class' =>'btn btn-success', 
                'style' => 'margin-bottom:15px')))
            ->getForm();

            $form->handleRequest($request);
       

            if($form->isSubmitted() && $form->isValid())
            {
                //Get Data
                $namevar = $form['name']->getData();
                $catevar = $form[' ']->getData();
                $description = $form['description']->getData();
                $deu_date = $form['deu_date']->getData();
                
                $now = new\DateTime('now');
                $em = $this->getDoctrine()->getManager();
                $edit = $em->getRepository('AppBundle:Entity')->find($id);

                $edit->setName($namevar);
                $edit->setCategory($catevar);
                $edit->setDescription($description);
                $edit->setDeuDate($deu_date);
                $edit->setCreateDate($now);

                

                $em->flush();

                $this->addFlash(
                    'Noitce',
                    'Todo Updated'
                    );
                return $this->redirectToRoute('list_todo');
            }
        return $this->render('todo/edit.html.twig', array(
            'update' => $edit,
            'formView'=>$form->createView()
            ));
    
}
    /**
     * @Route("/todos/details/{id}", name="details_todo")
     */
    public function detailsAction($id)
    {
             $detail = $this->getDoctrine()
            ->getRepository('AppBundle:Entity')
            ->find($id);
            return $this->render('todo/details.html.twig', array(
                'showdetail' => $detail
                ));
    }
    /**
     * @Route("/todos/delete/{id}", name="delete_todo")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $del = $em->getRepository('AppBundle:Entity')->find($id);
        $em->remove($del);
        $em->flush();

            $this->addFlash(
                'Noitce',
                'Todo deleted'
                );
                return $this->redirectToRoute('list_todo');
    }
}
