<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Form\ProductType;

class DefaultController extends Controller {

    public function indexAction() {
        // just setup a fresh $product object (no dummy data)
        $product = new Product();

        $form = $this->get('form.factory')->create(new ProductType(), $product);

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                // perform some action, such as save the object to the database

                return $this->redirect($this->generateUrl('store_product_success'));
            }
        }

        return $this->render('AcmeStoreBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function successAction() {
        return $this->render('AcmeStoreBundle:Default:success.html.twig');
    }
    
}
