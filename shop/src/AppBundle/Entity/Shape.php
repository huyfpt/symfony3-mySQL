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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
    public function isAixsym1()
    {
        return $this->aixsym1;
    }

    /**
     * @param bool $aixsym1
     */
    public function setAixsym1($aixsym1)
    {
        $this->aixsym1 = $aixsym1;
    }

    /**
     * @return bool
     */
    public function isAixsym2()
    {
        return $this->aixsym2;
    }

    /**
     * @param bool $aixsym2
     */
    public function setAixsym2($aixsym2)
    {
        $this->aixsym2 = $aixsym2;
    }

    /**
     * @return bool
     */
    public function isAixsym3()
    {
        return $this->aixsym3;
    }

    /**
     * @param bool $aixsym3
     */
    public function setAixsym3($aixsym3)
    {
        $this->aixsym3 = $aixsym3;
    }

    /**
     * @return int
     */
    public function getShapeid()
    {
        return $this->shapeid;
    }

    /**
     * @param int $shapeid
     */
    public function setShapeid($shapeid)
    {
        $this->shapeid = $shapeid;
    }

    /**
     * @var boolean
     *
     * @ORM\Column(name="SYM3", type="boolean", nullable=true)
     */
    private $sym3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AIXSYM1", type="boolean", nullable=true)
     */
    private $aixsym1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AIXSYM2", type="boolean", nullable=true)
     */
    private $aixsym2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AIXSYM3", type="boolean", nullable=true)
     */
    private $aixsym3;

    /**
     * @var integer
     *
     * @ORM\Column(name="shapeid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shapeid;

    public function __toString(){
        return $this->name;
    }

}

