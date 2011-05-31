<?php

namespace Acme\ModelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\ModelBundle\Entity\Post;

class DefaultController extends Controller {

    public function indexAction() {
//        $conn = $this->get('database_connection');
//        $posts = $conn->fetchAll('SELECT * FROM post');

        $manager = $this->get('doctrine')->getEntityManager();
        
        $query = $manager->createQuery('SELECT p FROM Acme\ModelBundle\Entity\Post p ORDER BY p.body ASC');
        
        $posts = $query->execute();
        return $this->render('AcmeModelBundle:Default:index.html.twig', array(
            'posts' => $posts
        ));
    }

}
