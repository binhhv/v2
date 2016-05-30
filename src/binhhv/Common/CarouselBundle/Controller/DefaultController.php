<?php

namespace binhhv\Common\CarouselBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use binhhv\Common\CarouselBundle\Entity\Slide;
use binhhv\Common\CarouselBundle\Form\SlideType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $slides = $em->getRepository('CommonCarouselBundle:Slide')->findAll();

        return $this->render('CommonCarouselBundle:Default:index.html.twig', array(
            'slides' => $slides,
        ));
        
    }
}
