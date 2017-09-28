<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studies
 *
 * @ORM\Table(name="studies", indexes={@ORM\Index(name="lnk_user_studies", columns={"id_user"}), @ORM\Index(name="lnk_product_studies", columns={"proid"})})
 * @ORM\Entity
 */
class Studies
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
     * @ORM\Column(name="calculatemode", type="boolean", nullable=true)
     */
    private $calculatemode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opeconomic", type="boolean", nullable=true)
     */
    private $opeconomic;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opcryogen", type="boolean", nullable=true)
     */
    private $opcryogen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opperform", type="boolean", nullable=true)
     */
    private $opperform;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opallow", type="boolean", nullable=true)
     */
    private $opallow;

    /**
     * @var integer
     *
     * @ORM\Column(name="packid", type="integer", nullable=true)
     */
    private $packid;

    /**
     * @var integer
     *
     * @ORM\Column(name="productionid", type="integer", nullable=true)
     */
    private $productionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="reportid", type="integer", nullable=true)
     */
    private $reportid;

    /**
     * @var integer
     *
     * @ORM\Column(name="priceid", type="integer", nullable=true)
     */
    private $priceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="studyResultid", type="integer", nullable=true)
     */
    private $studyresultid;

    /**
     * @var string
     *
     * @ORM\Column(name="cmment", type="string", length=255, nullable=true)
     */
    private $cmment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proid", referencedColumnName="id")
     * })
     */
    private $proid;


}

