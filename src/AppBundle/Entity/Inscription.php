<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Inscription
 * @package AppBundle\Entity
 * @ORM\Table()
 * @ORM\Entity()
 */
class Inscription
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="Country")
    */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="Province")
     */
    private $province;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     */
    private $city;

    /**
     * @var \DateTime
     */
    private $currentDate;

    /**
     * @return \DateTime
     */
    public function getCurrentDate()
    {
        return $this->currentDate;
    }

    /**
     * @param \DateTime $currentDate
     *
     * @return Inscription
     */
    public function setCurrentDate($currentDate)
    {
        $this->currentDate = $currentDate;

        return $this;
    }


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
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Inscription
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set province
     *
     * @param \AppBundle\Entity\Province $province
     *
     * @return Inscription
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
     * Set city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return Inscription
     */
    public function setCity(City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \AppBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }
}
