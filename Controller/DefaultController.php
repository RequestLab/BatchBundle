<?php

namespace RequestLab\BatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RequestLabBatchBundle:Default:index.html.twig');
    }
}
