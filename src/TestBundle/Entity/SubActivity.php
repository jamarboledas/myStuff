<?php

namespace TestBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SubActivity
 *
 * @ORM\Table()
 * @ORM\Entity()
 *
 */
class SubActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Activity")
     * @ORM\JoinColumn(name="activity_id", referencedColumnName="id")
     */
    private $activity;

    /**
     * @ORM\ManyToMany(targetEntity="Professional", mappedBy="subActivities")
     */
    private $professionals;

    public function __construct()
    {
        $this->professionals = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return SubActivity
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
     * Set activity
     *
     * @param \TestBundle\Entity\Activity $activity
     *
     * @return SubActivity
     */
    public function setActivity(\TestBundle\Entity\Activity $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return \TestBundle\Entity\Activity
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Add professional
     *
     * @param \TestBundle\Entity\Professional $professional
     *
     * @return SubActivity
     */
    public function addProfessional(\TestBundle\Entity\Professional $professional)
    {
        $this->professionals[] = $professional;

        return $this;
    }

    /**
     * Remove professional
     *
     * @param \TestBundle\Entity\Professional $professional
     */
    public function removeProfessional(\TestBundle\Entity\Professional $professional)
    {
        $this->professionals->removeElement($professional);
    }

    /**
     * Get professionals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfessionals()
    {
        return $this->professionals;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
