<?php

namespace LF\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('LFAdminBundle:Admin:index.html.twig');
    }
}
