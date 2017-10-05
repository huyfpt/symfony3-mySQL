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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class StudyController extends Controller
{
    /**
     * @Route("/new", name="new-study")
     */
    public function createAction(Request $request){
        $study = new Studies();
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }
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
        if($user == null){
            return $this->redirectToRoute('login');
        }
        $studyList = $this->getDoctrine()->getRepository(Studies::class);
        $stuls = $studyList->findBy(array('idUser'=>$user->getId()));
        if($request->getMethod() == 'POST'){
            $studyId = $request->get('id');
            $studyListID = $this->getDoctrine()->getRepository(Studies::class);
            $stu_ls_id = $studyListID->findBy(array('id'=>$studyId));
            $ret =[
                'comment' => count($stu_ls_id) ? $stu_ls_id[0]->getCmment() : null,
                'cal' => count($stu_ls_id) ? $stu_ls_id[0]->getCalculatemode() : null ,
                'economic' =>count($stu_ls_id) ? $stu_ls_id[0]->getOpeconomic() : null,
                'cryogen' =>count($stu_ls_id) ? $stu_ls_id[0]->getOpcryogen() : null,
                'perform' =>count($stu_ls_id) ? $stu_ls_id[0]->getOpperform() : null,
                'hasChild' =>count($stu_ls_id) ? $stu_ls_id[0]->getOpallow() : null,
                'productid'=>$studyId,
                'updateid'=>$studyId
            ];
            return new JsonResponse($ret);
        }
        return $this->render('study/open.html.twig', [
            'list' => $stuls
        ]);
    }
    /**
     * @Route("/save", name="save-study")
     */
    public function saveAction(Request $request){
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            $studyId = $request->get('stuID');
            $up = $this->getDoctrine()->getRepository(Studies::class)->find($studyId);
            $calmode = $request->get('cal');
            $economic=$request->get('economic');
            $cryogen =$request->get('cryogen');
            $perform =$request->get('perform');
            $haschild=$request->get('hasChild');
            $comment= $request->get('comment');

            $up->setCalculatemode($calmode);
            $up->setOpeconomic($economic);
            $up->setOpcryogen($cryogen);
            $up->setOpperform($perform);
            $up->setOpallow($haschild);
            $up->setCmment($comment);
            $em->flush();
            return $this->redirectToRoute('load-study');
        }
        return $this->render('product/load.html.twig');
    }
    /**
     * @Route("/delete", name="delete-study")
     */
    public function deleteAction(Request $request){
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $studyId = $request->get('stuID');
            $del = $em->getRepository(Studies::class)->find($studyId);
            if($studyId != null){
                $em->remove($del);
                $em->flush();
                return $this->redirectToRoute('load-study');
            }else{
                die("dddd");
            }
        }
        return $this->render('study/open.html.twig');
    }

    /**
     * @Route("/saveAs", name="saveAs-study")
     */
    public function saveAsAction(Request $request){
        $study = new Studies();
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }
        if($request->getMethod()== 'POST'){
            $name = $request->get('newStu');
//            $comment= $request->get('comment');
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
            $study->setCmment($result);
            $study->setOpeconomic($economic);
            $study->setOpcryogen($cryogen);
            $study->setOpperform($perform);
            $study->setOpallow($haschild);

            $em->persist($study);
            $em->flush();
            return $this->redirectToRoute('load-study');
        }

    }
}