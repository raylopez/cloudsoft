<?php

namespace Acme\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHomeBundle:Default:index.html.twig', array('name' => $name));
    }
}
