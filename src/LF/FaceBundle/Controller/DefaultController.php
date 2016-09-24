<?php

namespace LF\FaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFFaceBundle:Default:index.html.twig');
    }
}
