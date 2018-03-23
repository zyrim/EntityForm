<?php

namespace Zyrim\EntityFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EntityFormBundle:Default:index.html.twig');
    }
}
