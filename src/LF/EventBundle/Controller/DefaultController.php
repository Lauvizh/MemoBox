<?php

namespace LF\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\PaginatorBundle\Definition\PaginatorAwareInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('LFEventBundle:Event')->find($id);

        return $this->render('LFEventBundle:Default:index.html.twig' , array('event'=>$event));
    }

    public function themeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $theme = $em->getRepository('LFEventBundle:Theme')->find($id);



        return $this->render('LFEventBundle:Default:theme.html.twig',array('theme'=>$theme));
    }

    public function archiveAction($page, Request $request)
    {

    	$em = $this->getDoctrine()->getManager();

        $query = $em->getRepository('LFEventBundle:Event')->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', $page)/*page number*/,
            10/*limit per page*/

        );
        
        $pagination->setUsedRoute('lf_event_archive');

        return $this->render('LFEventBundle:Default:archive.html.twig', array('pagination'=>$pagination));
    }
}
