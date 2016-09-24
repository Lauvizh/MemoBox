<?php

namespace LF\MemoBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LF\EventBundle\Entity\Theme;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$themesHomePage = $em->getRepository('LFEventBundle:Theme')->findBy(array('homePage' => true), array('name' => 'ASC'), 6, 0);

        return $this->render('LFMemoBoxBundle:Default:index.html.twig', array('themesHomePage' => $themesHomePage));
    }
}
