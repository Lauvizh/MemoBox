<?php

namespace LF\MemoBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LF\EventBundle\Entity\Theme;

class HomePageController extends Controller
{
    public function HomePageAction()
    {
    	$em = $this->getDoctrine()->getManager();

    	$themesHomePage = $em->getRepository('LFEventBundle:Theme')->findBy(array('homePage' => true), array('name' => 'ASC'), 10, 0);

    	// dump($themesHomePage);
    	// die();

        return $this->render('LFMemoBoxBundle:HomePage:homepage.html.twig', array('themesHomePage' => $themesHomePage));
    }
}
