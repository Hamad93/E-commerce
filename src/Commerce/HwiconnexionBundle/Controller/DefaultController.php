<?php

namespace Commerce\HwiconnexionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommerceHwiconnexionBundle:Default:index.html.twig');
    }
}
