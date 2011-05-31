<?php

namespace Acme\FormBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\FormBundle\Entity\Users;

class FixtureLoader implements FixtureInterface {

    public function load($manager) {
        $user1 = new Users();
        $user1->setName('John Coltrane');
        $manager->persist($user1);
        
        $user2 = new Users();
        $user2->setName('Miles Davis');
        $manager->persist($user2);
        
        $user3 = new Users();
        $user3->setName('Charlie Mingus');
        $manager->persist($user3);

        $manager->flush();
    }

}