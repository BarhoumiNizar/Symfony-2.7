<?php

namespace PFE\symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {$name='map';
    
        return $this->render('applicationBundle:Default:index.html.twig',array('name'=>$name));
    }
}
