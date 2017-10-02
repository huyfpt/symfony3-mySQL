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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return bool
     */
    public function isSym1()
    {
        return $this->sym1;
    }

    /**
     * @param bool $sym1
     */
    public function setSym1($sym1)
    {
        $this->sym1 = $sym1;
    }

    /**
     * @return bool
     */
    public function isSym2()
    {
        return $this->sym2;
    }

    /**
     * @param bool $sym2
     */
    public function setSym2($sym2)
    {
        $this->sym2 = $sym2;
    }

    /**
     * @return bool
     */
    public function isSym3()
    {
        return $this->sym3;
    }

    /**
     * @param bool $sym3
     */
    public function setSym3($sym3)
    {
        $this->sym3 = $sym3;
    }

    /**
     * @return bool
     */
    public function isAxisym1()
    {
        return $this->axisym1;
    }

    /**
     * @param bool $axisym1
     */
    public function setAxisym1($axisym1)
    {
        $this->axisym1 = $axisym1;
    }

    /**
     * @return bool
     */
    public function isAxisym2()
    {
        return $this->axisym2;
    }

    /**
     * @param bool $axisym2
     */
    public function setAxisym2($axisym2)
    {
        $this->axisym2 = $axisym2;
    }

    /**
     * @return bool
     */
    public function isAxisym3()
    {
        return $this->axisym3;
    }

    /**
     * @param bool $axisym3
     */
    public function setAxisym3($axisym3)
    {
        $this->axisym3 = $axisym3;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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

