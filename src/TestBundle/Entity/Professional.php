<?php

namespace TestBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Professional
 *
 * @ORM\Table()
 * @ORM\Entity()
 *
 */
class Professional
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
     *
     *   @var string
     *   @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="SubActivity", inversedBy="professionals")
     * @ORM\JoinTable(name="subActivities_professionals")
     */
    private $subActivities;

    public function __construct()
    {
        $this->subActivities = new ArrayCollection();
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
     * @return Professional
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
     * Add subActivity
     *
     * @param \TestBundle\Entity\SubActivity $subActivity
     *
     * @return Professional
     */
    public function addSubActivity(\TestBundle\Entity\SubActivity $subActivity)
    {
        $this->subActivities[] = $subActivity;

        return $this;
    }

    /**
     * Remove subActivity
     *
     * @param \TestBundle\Entity\SubActivity $subActivity
     */
    public function removeSubActivity(\TestBundle\Entity\SubActivity $subActivity)
    {
        $this->subActivities->removeElement($subActivity);
    }

    /**
     * Get subActivities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubActivities()
    {
        return $this->subActivities;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
