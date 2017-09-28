<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shape
 *
 * @ORM\Table(name="shape")
 * @ORM\Entity
 */
class Shape
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    private $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SYM1", type="boolean", nullable=true)
     */
    private $sym1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SYM2", type="boolean", nullable=true)
     */
    private $sym2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SYM3", type="boolean", nullable=true)
     */
    private $sym3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AXISYM1", type="boolean", nullable=true)
     */
    private $axisym1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AXISYM2", type="boolean", nullable=true)
     */
    private $axisym2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AXISYM3", type="boolean", nullable=true)
     */
    private $axisym3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

