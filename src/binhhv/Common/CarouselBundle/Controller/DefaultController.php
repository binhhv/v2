<?php

namespace binhhv\Common\CarouselBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommonCarouselBundle:Default:index.html.twig');
    }
}
