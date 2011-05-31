<?php

namespace Acme\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\ModelBundle\Entity\Post;

class FixtureLoader implements FixtureInterface {

    public function load($manager) {
        $post1 = new Post();
        $post1->setTitle('Cesar Hernandez');
        $post1->setBody('Ing. de sistemas, graduado en la Universidad
            Bicentenaria de Aragua');
        $manager->persist($post1);
        
        $post2 = new Post();
        $post2->setTitle('Sebastián Hernandez');
        $post2->setBody('Estuadiante de Maternal, nacido en Lechería, Estado Anzoátegui');
        $manager->persist($post2);

        $manager->flush();
    }

}