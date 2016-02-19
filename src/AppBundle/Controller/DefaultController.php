<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscription;
use AppBundle\Form\Type\InscriptionType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/app/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $inscription = new Inscription();
        $form = $this->createForm(new InscriptionType(), $inscription);
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();
            return new Response("Form has been submitted properly");
        }
        return $this->render('default/index.html.twig', array(
            'form' =>  $form->createView(),
        ));
    }
}
