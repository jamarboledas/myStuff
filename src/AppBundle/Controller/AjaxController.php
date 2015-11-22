<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Country;
use AppBundle\Entity\Province;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class AjaxController
 * @package AppBundle\Controller
 */
class AjaxController extends Controller
{
    /**
     * @Route("/province/{id}", name="select_province")
     */
    public function provinceAction(Country $country)
    {
        $em = $this->getDoctrine()->getManager();
        $provinces= $em->getRepository('AppBundle:Province')->findProvinceByCountry($country);
//        $provinces = $this->get('myStuff.repository.provinces')->findProvinceByCountry($country);
        return new JsonResponse($provinces);
    }

    /**
     * @Route("/city/{id}", name="select_city")
     */
    public function cityAction(Province $province)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('AppBundle:City')->findCityByProvince($province);
//        $cities = $this->get('myStuff.repository.cities')->findCityByProvince($province);
        return new JsonResponse($cities);
    }
}
