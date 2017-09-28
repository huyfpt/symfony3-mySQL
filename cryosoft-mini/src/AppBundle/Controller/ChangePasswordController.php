<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ChangePasswordController extends Controller
{
    /**
     * @Route("/change", name="change_password")
     */
    public function changepass(Request $request){
        $session = $request->getSession();

        if($request->getMethod() == 'POST') {
            $oldpassword = $request->get('_oldPass');
            $newpassword = $request->get('_newPass');
            $confirm     = $request->get('_confirmPass');
            $user = $this->getUser();
            $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
            $oldpass_encoder = $encoder->encodePassword($oldpassword, $user->getSalt());
            if($user->getPassword() != $oldpass_encoder) {
                $session->getFlashBag()->set('Noitce', "Wrong old password!");
            }elseif ($newpassword != $confirm){
                $session->getFlashBag()->set('Noitce', "New password or Confirm password do not match!!");
            }else{
                $new_pwd_encoded = $encoder->encodePassword($newpassword, $user->getSalt());
                $user->setPassword($new_pwd_encoded);
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($user);
                $manager->flush();
                $session->getFlashBag()->set('success_msg', "Password change successfully!");
            }

            return $this->redirectToRoute('wellcome');
        }
        return $this->render('authentication/home.html.twig');
    }
}