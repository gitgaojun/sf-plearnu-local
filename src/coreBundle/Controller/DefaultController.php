<?php

namespace coreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        echo 'heihie';exit;
        return $this->render('coreBundle:Default:index.html.twig');
    }
}
