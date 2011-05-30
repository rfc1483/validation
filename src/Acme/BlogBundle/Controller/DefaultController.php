<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\BlogBundle\Author;

class DefaultController extends Controller {

    public function indexAction() {
        $author = new Author();
        
        $author->name = null;

        $validator = $this->get('validator');
        $errorList = $validator->validate($author);

        if (count($errorList) > 0) {
            return new Response(print_r($errorList, true));
        } else {
            return new Response('The author is valid! Yes!');
        }
    }

}
