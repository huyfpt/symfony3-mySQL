<?php
namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ResgiterController extends Controller
{
    /**
     * @Route("/signup", name="register")
     */
    public function registerAction(Request $request)
    {
        $session = $request->getSession();
//         Create a new blank user and process the form
        $user = new User();
        if ($request->getMethod() == 'POST') {

            $username = $request->request->get("_username");
            $pass = $request->request->get("_password");
            $confirm = $request->request->get("_confirm");
            if($pass != $confirm){
                $session->getFlashBag()->set('Noitce', "Password do not match");
            }
        else{
            $user->setUsername($username);
            $user->setPassword($pass);
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password_encoder = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password_encoder);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('login');
        }
    }

        return $this->render('authentication/register.html.twig');
    }
}