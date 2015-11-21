<?php

namespace AppBundle\Entity;


/**
 * Class Province
 * @package AppBundle\Entity
 * @ORM\Table()
 * @ORM\Entity()
 */
class Province
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