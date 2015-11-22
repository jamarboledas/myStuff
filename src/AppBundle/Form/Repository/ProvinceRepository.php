<?php
namespace AppBundle\Form\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * Class ProvinceRepository
 * @package AppBundle\Doctrine\ORM
 */
class ProvinceRepository extends EntityRepository
{
    /**
     * @param AppBundle/Entity/Country $country
     * @return array
     */
    public function findProvinceByCountry($country)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT o.id, o.name
        FROM AppBundle:Province o
        WHERE o.country = :country
        ORDER BY o.name');
        $query->setParameter('country', $country->getId());
        return $query->getResult();
    }
}