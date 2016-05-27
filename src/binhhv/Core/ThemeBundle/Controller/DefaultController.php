<?php

namespace binhhv\Core\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	public function indexAction() {
		return $this->render('CoreThemeBundle:ustora:index.html.twig');
	}
}
