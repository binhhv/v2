<?php

namespace binhhv\App\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBackBundle:Default:index.html.twig');
    }
}
