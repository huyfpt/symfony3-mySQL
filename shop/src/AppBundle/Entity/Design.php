<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Design
 *
 * @ORM\Table(name="design", indexes={@ORM\Index(name="lnk_product_design", columns={"proid"}), @ORM\Index(name="lnk_shape_design", columns={"shapeid"})})
 * @ORM\Entity
 */
class Design
{
    /**
     * @var float
     *
     * @ORM\Column(name="Des_REALWEIGHT", type="float", precision=12, scale=0, nullable=true)
     */
    private $desRealweight;

    /**
     * @var float
     *
     * @ORM\Column(name="Des_ISo", type="float", precision=12, scale=0, nullable=true)
     */
    private $desIso;

    /**
     * @var float
     *
     * @ORM\Column(name="Des_WEIGHT", type="float", precision=12, scale=0, nullable=true)
     */
    private $desWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="Des_VOLUME", type="float", precision=22, scale=0, nullable=true)
     */
    private $desVolume;

    /**
     * @var integer
     *
     * @ORM\Column(name="designid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $designid;

    /**
     * @var \AppBundle\Entity\Shape
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Shape")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shapeid", referencedColumnName="shapeid")
     * })
     */
    private $shapeid;

    /**
     * @return float
     */
    public function getDesRealweight()
    {
        return $this->desRealweight;
    }

    /**
     * @param float $desRealweight
     */
    public function setDesRealweight($desRealweight)
    {
        $this->desRealweight = $desRealweight;
    }

    /**
     * @return float
     */
    public function getDesIso()
    {
        return $this->desIso;
    }

    /**
     * @param float $desIso
     */
    public function setDesIso($desIso)
    {
        $this->desIso = $desIso;
    }

    /**
     * @return float
     */
    public function getDesWeight()
    {
        return $this->desWeight;
    }

    /**
     * @param float $desWeight
     */
    public function setDesWeight($desWeight)
    {
        $this->desWeight = $desWeight;
    }

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
     * @return float
     */
    public function getDesVolume()
    {
        return $this->desVolume;
    }

    /**
     * @param float $desVolume
     */
    public function setDesVolume($desVolume)
    {
        $this->desVolume = $desVolume;
    }

    /**
     * @return int
     */
    public function getDesignid()
    {
        return $this->designid;
    }

    /**
     * @param int $designid
     */
    public function setDesignid($designid)
    {
        $this->designid = $designid;
    }

    /**
     * @return Shape
     */
    public function getShapeid()
    {
        return $this->shapeid;
    }

    /**
     * @param Shape $shapeid
     */
    public function setShapeid($shapeid)
    {
        $this->shapeid = $shapeid;
    }

    /**
     * @return Product
     */
    public function getProid()
    {
        return $this->proid;
    }

    /**
     * @param Product $proid
     */
    public function setProid($proid)
    {
        $this->proid = $proid;
    }

    /**
     * @var \AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proid", referencedColumnName="productId")
     * })
     */
    private $proid;

    public function __toString(){
        return $this->name;
    }

}

