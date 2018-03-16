<?php

namespace Commerce\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommerceUserBundle:Default:index.html.twig');
    }
}
