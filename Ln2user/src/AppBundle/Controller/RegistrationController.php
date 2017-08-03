<?php 
namespace AppBundle\Controller;
use AppBundle\Entity\Ln2user;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RegistrationController extends Controller
{
	/**
     * @Route("/signup", name="register")
     */
	public function registerAction(Request $request)
	{
		 // Create a new blank user and process the form
        $user = new Ln2user();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getUserpass());
            $user->setUserpass($password);

            // Set their role
            //$user->setIdMonetaryCurrency(1);
            // Save
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');
        }

        return $this->render('admintration/registration.html.twig', [
            'form' => $form->createView(),
        ]);
	}
}
