<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="lnk_studies_product", columns={"id_study"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="proISO", type="boolean", nullable=true)
     */
    private $proiso;

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
    public function isProiso()
    {
        return $this->proiso;
    }

    /**
     * @param bool $proiso
     */
    public function setProiso($proiso)
    {
        $this->proiso = $proiso;
    }

    /**
     * @return float
     */
    public function getProrealwiegth()
    {
        return $this->prorealwiegth;
    }

    /**
     * @param float $prorealwiegth
     */
    public function setProrealwiegth($prorealwiegth)
    {
        $this->prorealwiegth = $prorealwiegth;
    }

    /**
     * @return float
     */
    public function getProvolume()
    {
        return $this->provolume;
    }

    /**
     * @param float $provolume
     */
    public function setProvolume($provolume)
    {
        $this->provolume = $provolume;
    }

    /**
     * @return float
     */
    public function getProweigth()
    {
        return $this->proweigth;
    }

    /**
     * @param float $proweigth
     */
    public function setProweigth($proweigth)
    {
        $this->proweigth = $proweigth;
    }

    /**
     * @return int
     */
    public function getIdMeshgeneral()
    {
        return $this->idMeshgeneral;
    }

    /**
     * @param int $idMeshgeneral
     */
    public function setIdMeshgeneral($idMeshgeneral)
    {
        $this->idMeshgeneral = $idMeshgeneral;
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
     * @return Studies
     */
    public function getIdStudy()
    {
        return $this->idStudy;
    }

    /**
     * @param Studies $idStudy
     */
    public function setIdStudy($idStudy)
    {
        $this->idStudy = $idStudy;
    }

    /**
     * @var float
     *
     * @ORM\Column(name="proRealWiegth", type="float", precision=10, scale=0, nullable=true)
     */
    private $prorealwiegth;

    /**
     * @var float
     *
     * @ORM\Column(name="provolume", type="float", precision=10, scale=0, nullable=true)
     */
    private $provolume;

    /**
     * @var float
     *
     * @ORM\Column(name="proWeigth", type="float", precision=10, scale=0, nullable=true)
     */
    private $proweigth;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_meshGeneral", type="integer", nullable=true)
     */
    private $idMeshgeneral;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Studies
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Studies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_study", referencedColumnName="id")
     * })
     */
    private $idStudy;


}

