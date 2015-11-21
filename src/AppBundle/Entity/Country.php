<?php

namespace AppBundle\Entity;


/**
 * Class Country
 * @package AppBundle\Entity
 * @ORM\Table()
 * @ORM\Entity()
 */
class Country
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;
}