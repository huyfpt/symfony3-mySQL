<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductEmlt
 *
 * @ORM\Table(name="product_EMLT", indexes={@ORM\Index(name="lnk_product_product_EMLT", columns={"id_pro"}), @ORM\Index(name="lnk_shape_product_EMLT", columns={"id_shape"}), @ORM\Index(name="lnk_component_product_EMLT", columns={"id_comp"})})
 * @ORM\Entity
 */
class ProductEmlt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="insert_line_order", type="integer", nullable=true)
     */
    private $insertLineOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="node_decim", type="integer", nullable=true)
     */
    private $nodeDecim;

    /**
     * @var float
     *
     * @ORM\Column(name="original_thick", type="float", precision=10, scale=0, nullable=true)
     */
    private $originalThick;

    /**
     * @var float
     *
     * @ORM\Column(name="Pro_dehyd", type="float", precision=10, scale=0, nullable=true)
     */
    private $proDehyd;

    /**
     * @var float
     *
     * @ORM\Column(name="Pro_dehyd_cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $proDehydCost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pro_elmt_iso", type="boolean", nullable=true)
     */
    private $proElmtIso;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_elmt_name", type="string", length=255, nullable=true)
     */
    private $proElmtName;

    /**
     * @var float
     *
     * @ORM\Column(name="pro_elmt_realwiegth", type="float", precision=10, scale=0, nullable=true)
     */
    private $proElmtRealwiegth;

    /**
     * @var float
     *
     * @ORM\Column(name="pro_elmt_wiegth", type="float", precision=10, scale=0, nullable=true)
     */
    private $proElmtWiegth;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_param1", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapeParam1;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_param2", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapeParam2;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_param3", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapeParam3;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_pos1", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapePos1;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_pos2", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapePos2;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_pos3", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapePos3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Shape
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Shape")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_shape", referencedColumnName="id")
     * })
     */
    private $idShape;

    /**
     * @var \AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pro", referencedColumnName="id")
     * })
     */
    private $idPro;

    /**
     * @var \AppBundle\Entity\Component
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Component")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comp", referencedColumnName="id")
     * })
     */
    private $idComp;


}

