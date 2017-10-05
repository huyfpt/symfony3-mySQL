<?php

namespace TranslateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TranslationController extends Controller
{
    /**
     * @Route("/{_locale}/translate")
     */
    public function translationAction()
    {
        return $this->render('TranslateBundle:Translation:translation.html.twig', array(
            // ...
        ));
    }

}
