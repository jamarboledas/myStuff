<?php
/**
 * Created by PhpStorm.
 * User: juanan
 * Date: 21/11/15
 * Time: 16:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class City
 * @package AppBundle\Entity
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Form\Repository\CityRepository")
 */
class City
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
    * @ORM\ManyToOne(targetEntity="Province")
    */
    private $province;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set province
     *
     * @param \AppBundle\Entity\Province $province
     *
     * @return City
     */
    public function setProvince(Province $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \AppBundle\Entity\Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * To String.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
