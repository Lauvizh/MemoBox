<?php

namespace LF\MemoBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFMemoBoxBundle:Default:index.html.twig');
    }
}
