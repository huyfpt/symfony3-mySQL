<?php
/**
 * Created by PhpStorm.
 * User: huytd
 * Date: 9/28/17
 * Time: 2:23 PM
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Langauge;
use AppBundle\Entity\Money;
use AppBundle\Entity\Studies;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomePageController extends Controller
{
    /**
     * @Route("/home", name="wellcome")
     */
    public function indexAction (){
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('login');
        }else {
            $userList = $this->getDoctrine()->getRepository(User::class);
            $rs = $userList->findBy(array('id' => $user->getId()));
            $studyList = $this->getDoctrine()->getRepository(Studies::class);
            $stuls = $studyList->findBy(array('idUser' => $user->getId()));
            $lang = $this->getDoctrine()->getRepository(Langauge::class)->findAll();
            $money = $this->getDoctrine()->getRepository(Money::class)->findAll();
            $language_list = array(
                'en' => 'English',
                'vn' => 'VietNamses'
            );
        }
        return $this->render('authentication/home.html.twig', [
            'username' => $rs[0]->getUsername(),
            'valuesLang'=>$rs[0]->getIdLanguage()->getId(),
            'valuesMon'=>$rs[0]->getIdMonytary()->getId(),
            'lang' =>$lang,
            'money'=>$money,
            'lang_list' => $language_list,
            'studyList' =>$stuls
        ]);
    }

}