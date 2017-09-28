<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langauge
 *
 * @ORM\Table(name="langauge")
 * @ORM\Entity
 */
class Langauge
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=2, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

