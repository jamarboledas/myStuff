<?php
namespace AppBundle\Form\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * Class CityRepository
 * @package AppBundle\Doctrine\ORM
 */
class CityRepository extends EntityRepository
{
    /**
     * @param AppBundle/Entity/Province $province
     * @return array
     */
    public function findCityByProvince($province)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('
        SELECT o.id, o.name
        FROM AppBundle:City o
        WHERE o.province = :province
        ORDER BY o.name');
        $query->setParameter('province', $province->getId());
        return $query->getResult();
    }
}