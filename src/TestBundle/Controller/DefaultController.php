<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/dev/{name}")
     */
    public function indexAction($name)
    {
        return $this->render('@Test/Default/index.html.twig', array('name' => $name));
    }
}
