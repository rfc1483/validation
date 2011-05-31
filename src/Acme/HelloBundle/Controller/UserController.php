<?php

namespace Acme\HelloBundle\Controller;

use Acme\HelloBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller {

    public function indexAction() {
        return $this->render('AcmeHelloBundle:User:index.html.twig');
    }

    public function createAction($name) {
        $user = new User();
        $user->setName($name);

        $em = $this->get('doctrine')->getEntityManager();
        $em->persist($user);
        $em->flush();

        return $this->render('AcmeHelloBundle:User:create.html.twig');
        // ...
    }

    public function editAction($id) {
        $em = $this->get('doctrine')->getEntityManager();
        $user = $em->find('AcmeHelloBundle:User', $id);
        $user->setBody('new body');
        $em->persist($user);
        $em->flush();

        // ...
    }

    public function deleteAction($id) {
        $query = $this->get('doctrine')->getEntityManager()
                ->createQuery('DELETE FROM Acme\HelloBundle\Entity\User u
                        WHERE u.id = :id');
        $query->setParameters(array(
            'id' => $id
        ));

        $query->execute();

        return $this->render('AcmeHelloBundle:User:delete.html.twig');

        // ...
    }

    public function showAction() {
        $em = $this->get('doctrine')->getEntityManager();
        $users = $em->getRepository('AcmeHelloBundle:User')
                ->findAllOrderedByName();
        
        return $this->render('AcmeHelloBundle:User:show.html.twig', array(
            'users' => $users
        ));
    }

}
