<?php

namespace noirdelautre\collectifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('noirdelautrecollectifBundle:Default:index.html.twig');
    }
}
