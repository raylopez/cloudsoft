<?php

namespace Acme\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHomeBundle:Home:index.html.twig', array('name' => $name));
		//return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
