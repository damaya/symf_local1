<?php

namespace Vader\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name,$sith)
    {
        //return $this->render('VaderEventBundle:Default:index.html.twig', array('name' => $name,'clan' => $sith));
        $arr = array(
            'name' => $name,
            'category'
            => $sith,
            'status'
            => 'Welcome to the dark side!',
        );
        $response = new Response(json_encode($arr));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}
