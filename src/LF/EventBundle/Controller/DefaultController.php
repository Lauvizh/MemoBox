<?php

namespace LF\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('LFEventBundle:Event')->find($id);

        //$medias = $event->getMedias();

        //dump($medias);

        return $this->render('LFEventBundle:Default:index.html.twig' , array('event'=>$event));
    }

    public function themeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $theme = $em->getRepository('LFEventBundle:Theme')->find($id);

        return $this->render('LFEventBundle:Default:theme.html.twig',array('theme'=>$theme));
    }

    public function archiveAction()
    {

    	$em = $this->getDoctrine()->getManager();

        $allEvents = $em->getRepository('LFEventBundle:Event')->findAll();

        return $this->render('LFEventBundle:Default:archive.html.twig', array('allEvents'=>$allEvents));
    }
}
