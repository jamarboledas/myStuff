<?php
/**
 * Created by PhpStorm.
 * User: juanan
 * Date: 21/11/15
 * Time: 16:03
 */

namespace AppBundle\Entity;


/**
 * Class City
 * @package AppBundle\Entity
 * @ORM\Table()
 * @ORM\Entity()
 */
class City
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