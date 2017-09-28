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
        if($request->getMethod()== 'POST'){
            $name = $request->get('studyName');
            $comment= $request->get('comment');
            $calmode= $request->get('cal');
            $economic=$request->get('economic');
            $cryogen =$request->get('cryogen');
            $perform =$request->get('perform');
            $haschild=$request->get('hasChild');
            
        }
        return $this->render('study/new.html.twig');
    }
}