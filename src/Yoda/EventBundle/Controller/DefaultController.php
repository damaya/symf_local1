<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name,$jedi)
    {
        //return $this->render('YodaEventBundle:Default:index.html.twig', array('name' => $name,'jedi'=> $jedi));
        $arr = array(
            'name' => $name,
            'category'
            => $jedi,
            'status'
            => 'That the force be with you!',
        );

        $response = new Response(json_encode($arr));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
}
