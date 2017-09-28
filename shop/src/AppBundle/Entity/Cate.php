<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cate
 *
 * @ORM\Table(name="cate")
 * @ORM\Entity
 */
class Cate
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
     * @ORM\Column(name="cateId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cateid;

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
    public function getCateid()
    {
        return $this->cateid;
    }

    /**
     * @param int $cateid
     */
    public function setCateid($cateid)
    {
        $this->cateid = $cateid;
    }

    public function __toString(){
        return $this->name;
    }
}

