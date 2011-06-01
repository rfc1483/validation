<?php

namespace Acme\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\FormBundle\Entity\Users;
use Acme\FormBundle\Form\UsersType;

class DefaultController extends Controller {

    public function indexAction() {
//        $user = new Users();
//        $user->setName("Duke Ellington");
        
        $user = new Users();
        $user->setName("Charlie Mingus");
        $user->setName("Duke Ellington");
        $user->setName("Miles Davis");

        $form = $this->get('form.factory')
                ->create(new UsersType(), $user);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            echo $user->getName();
            if ($form->isValid()) {
                $manager = $this->get('doctrine')->getEntityManager();
                $manager->persist($user);
                $manager->flush();
                return $this->redirect($this->generateUrl('store_product_success'));
            }
        }

        return $this->render('AcmeFormBundle:Default:index.html.twig', array(
            'form' => $form->createView()
        ));
        
    }
}