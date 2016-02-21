<?php

namespace TestBundle\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Response;
/**
 * Class ProgramController
 * @package TestBundle\Controller
 * @Route("/program")
 */
class ProgramController extends Controller
{
    /**
     * @Route("/list/doc")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $programs = $em
            ->getRepository('TestBundle:Program')->findAll();

//        $serializer = $this->get('serializer');
//        $response = $serializer->serialize($programs, 'json');
//        return new Response($response);

        return $this->render('@Test/program/listjs.html.twig',
            array(
                'programs' => $programs,
            ));
    }

    /**
     * @Route("/list/dql/{first}")
     * @Method("GET")
     */
    public function indexDqlAction($first = 0)
    {
        $em = $this->getDoctrine()->getManager();

        $programs = new Paginator($em->getRepository('TestBundle:Program')
            ->findAllOrderedByName($first), $fetchJoinCollection = true);

        return $this->render('@Test/program/list.html.twig',
            array(
                'programs' => $programs,
                'num_pags' => ceil(count($programs))/5
            ));
    }
}
