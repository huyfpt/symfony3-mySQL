<?php
/**
 * Created by PhpStorm.
 * User: huytd
 * Date: 9/28/17
 * Time: 3:29 PM
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Studies;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudyController extends Controller
{
    /**
     * @Route("/new", name="new-study")
     */
    public function createAction(Request $request){
        $study = new Studies();
        $user = $this->getUser();
        if($request->getMethod()== 'POST'){
            $name = $request->get('studyName');
            $comment= $request->get('comment');
            $calmode= $request->get('cal');
            $economic=$request->get('economic');
            $cryogen =$request->get('cryogen');
            $perform =$request->get('perform');
            $haschild=$request->get('hasChild');
            $now = new\DateTime('now');
            $result = $now->format('Y-m-d H:i:s');
            $em = $this->getDoctrine()->getManager();
            $study->setIdUser($user);
            $study->setName($name);
            $study->setCalculatemode($calmode);
            $study->setCmment($comment. " " . $result);
            $study->setOpeconomic($economic);
            $study->setOpcryogen($cryogen);
            $study->setOpperform($perform);
            $study->setOpallow($haschild);
            $em->persist($study);
            $em->flush();
            return $this->redirectToRoute('load-study');
        }
        return $this->render('study/new.html.twig');
    }
    /**
     * @Route("/open", name="load-study")
     */
    public function loadAction(Request $request){
        $user = $this->getUser();
        $studyList = $this->getDoctrine()->getRepository(Studies::class);
        $stuls = $studyList->findBy(array('idUser'=>$user->getId()));
        if($request->getMethod() == 'POST'){

        }
        return $this->render('study/open.html.twig', [
            'list' => $stuls
        ]);
    }
    /**
     * @Route("/save", name="save-study")
     */
    public function saveAction(Request $request){

    }
    /**
     * @Route("/saveAs", name="saveAs-study")
     */
    public function saveAsAction(Request $request){

    }
}