<?php

namespace Commerce\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@CommerceAdmin/Default/index.html.twig');
    }
}
