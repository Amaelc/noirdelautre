<?php

namespace noirdelautre\artisteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('noirdelautreartisteBundle:Default:index.html.twig');
    }
}
