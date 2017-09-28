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

