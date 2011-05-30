<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $conn = $this->get('database_connection');
        $posts = $conn->fetchAll('SELECT * FROM post');
        
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array(
                'posts' => $posts
                ));
    }
}
