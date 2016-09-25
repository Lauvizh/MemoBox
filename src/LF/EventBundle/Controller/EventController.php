<?php
// src/Acme/ArticleBundle/Controller/ArticleController.php

namespace LF\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LF\EventBundle\Entity\Event;

class EventController extends Controller
{
    public function EventListItemAction($events)
    {
        return $this->render(
            'LFEventBundle:Event:eventListItem.html.twig',
            array('events' => $events)
        );
    }
}
