<?php

namespace TestBundle\Entity;

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
     *   @var string
     *   @ORM\Column(type="string", nullable=false)
     *
     */
    private $name;
}
