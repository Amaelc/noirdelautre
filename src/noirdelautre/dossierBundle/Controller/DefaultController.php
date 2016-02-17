<?php

namespace noirdelautre\dossierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('noirdelautredossierBundle:Default:index.html.twig');
    }
}
