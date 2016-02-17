<?php

namespace noirdelautre\imageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('noirdelautreimageBundle:Default:index.html.twig');
    }
}
