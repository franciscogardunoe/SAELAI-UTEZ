<?php

namespace saelaiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('saelaiBundle:Default:index.html.twig');
    }

    public function ExampleTemplateAction(Request $request) {
        return $this->render('saelaiBundle:Universal:Start.html.twig');
    }

}
