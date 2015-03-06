<?php

namespace CGG\ConferenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('CGGConferenceBundle:Default:index.html.twig', array('name' => "yoann"));
    }
}
