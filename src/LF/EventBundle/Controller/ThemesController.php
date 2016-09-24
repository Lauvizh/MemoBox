<?php
// src/Acme/ArticleBundle/Controller/ArticleController.php

namespace LF\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LF\EventBundle\Entity\Theme;

class ThemesController extends Controller
{
    public function getAllThemesMenuAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $allThemes = $em->getRepository('LFEventBundle:Theme')->findAll();
    	// $allThemes = array(
    	// 	array('id'=>1,'nom'=>'theme1')
    	// 	);
        return $this->render(
            'LFEventBundle:Themes:themeMenuList.html.twig',
            array('allThemes' => $allThemes)
        );
    }
}
