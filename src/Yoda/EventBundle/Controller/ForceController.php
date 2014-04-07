<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ForceController extends Controller
{
    public function indexAction($force,$points)
    {
        //return $this->render('YodaEventBundle:Default:index.html.twig', array('name' => $name,'jedi'=> $jedi));
        $arr = array(
            'force' => $force,
            'points'=> $points,
            'status'=> 'That the force be with you! JEDI',
        );

        $response = new Response(json_encode($arr));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}
