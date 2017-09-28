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
    public function isCalculatemode()
    {
        return $this->calculatemode;
    }

    /**
     * @param bool $calculatemode
     */
    public function setCalculatemode($calculatemode)
    {
        $this->calculatemode = $calculatemode;
    }

    /**
     * @return bool
     */
    public function isOpeconomic()
    {
        return $this->opeconomic;
    }

    /**
     * @param bool $opeconomic
     */
    public function setOpeconomic($opeconomic)
    {
        $this->opeconomic = $opeconomic;
    }

    /**
     * @return bool
     */
    public function isOpcryogen()
    {
        return $this->opcryogen;
    }

    /**
     * @param bool $opcryogen
     */
    public function setOpcryogen($opcryogen)
    {
        $this->opcryogen = $opcryogen;
    }

    /**
     * @return bool
     */
    public function isOpperform()
    {
        return $this->opperform;
    }

    /**
     * @param bool $opperform
     */
    public function setOpperform($opperform)
    {
        $this->opperform = $opperform;
    }

    /**
     * @return bool
     */
    public function isOpallow()
    {
        return $this->opallow;
    }

    /**
     * @param bool $opallow
     */
    public function setOpallow($opallow)
    {
        $this->opallow = $opallow;
    }

    /**
     * @return int
     */
    public function getPackid()
    {
        return $this->packid;
    }

    /**
     * @param int $packid
     */
    public function setPackid($packid)
    {
        $this->packid = $packid;
    }

    /**
     * @return int
     */
    public function getProductionid()
    {
        return $this->productionid;
    }

    /**
     * @param int $productionid
     */
    public function setProductionid($productionid)
    {
        $this->productionid = $productionid;
    }

    /**
     * @return int
     */
    public function getReportid()
    {
        return $this->reportid;
    }

    /**
     * @param int $reportid
     */
    public function setReportid($reportid)
    {
        $this->reportid = $reportid;
    }

    /**
     * @return int
     */
    public function getPriceid()
    {
        return $this->priceid;
    }

    /**
     * @param int $priceid
     */
    public function setPriceid($priceid)
    {
        $this->priceid = $priceid;
    }

    /**
     * @return int
     */
    public function getStudyresultid()
    {
        return $this->studyresultid;
    }

    /**
     * @param int $studyresultid
     */
    public function setStudyresultid($studyresultid)
    {
        $this->studyresultid = $studyresultid;
    }

    /**
     * @return string
     */
    public function getCmment()
    {
        return $this->cmment;
    }

    /**
     * @param string $cmment
     */
    public function setCmment($cmment)
    {
        $this->cmment = $cmment;
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
     * @return User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param User $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
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

