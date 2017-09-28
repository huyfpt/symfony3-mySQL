<?php
/**
 * Created by PhpStorm.
 * User: huytd
 * Date: 9/28/17
 * Time: 1:14 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Langauge;
use AppBundle\Entity\Money;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UpdateInfoController extends Controller
{
    /**
     * @Route("/updateInfo", name="update-userInfo")
     */
    public function updateAction(Request $request){
        $user = $this->getUser();
        $userList= $this->getDoctrine()->getRepository(User::class);
        $rs = $userList->findBy(array('id'=>$user->getId()));

        if ($request->getMethod() == 'POST'){
//           $getUser = $this->getDoctrine()->getRepository(User::class)->findBy(array('id'=>$user));
            $userChange = $request->get('changeuser');
            $changelang = $request->get('changeLang');
            $changeMon =$request->get('changeMon');
            $lang = $this->getDoctrine()->getRepository(Langauge::class)->find($changelang);
            $money= $this->getDoctrine()->getRepository(Money::class)->find($changeMon);
            $user->setUsername($userChange);
            $user->setIdLanguage($lang);
            $user->setIdMonytary($money);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('wellcome');
        }
        return $this->render('authentication/changeuser.html.twig');
    }
}