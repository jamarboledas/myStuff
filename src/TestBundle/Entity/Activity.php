<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table()
 * @ORM\Entity()
 *
 */
class Activity
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
     * @ORM\ManyToOne(targetEntity="Program")
     * @ORM\JoinColumn(name="program_id", referencedColumnName="id")
     */
    private $program;

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
     * @return Activity
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
     * Set program
     *
     * @param \TestBundle\Entity\Program $program
     *
     * @return Activity
     */
    public function setProgram(\TestBundle\Entity\Program $program = null)
    {
        $this->program = $program;

        return $this;
    }

    /**
     * Get program
     *
     * @return \TestBundle\Entity\Program
     */
    public function getProgram()
    {
        return $this->program;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
