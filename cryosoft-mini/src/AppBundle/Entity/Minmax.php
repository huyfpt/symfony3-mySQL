<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Minmax
 *
 * @ORM\Table(name="MinMax")
 * @ORM\Entity
 */
class Minmax
{
    /**
     * @var integer
     *
     * @ORM\Column(name="limit_item", type="integer", nullable=true)
     */
    private $limitItem;

    /**
     * @return int
     */
    public function getLimitItem()
    {
        return $this->limitItem;
    }

    /**
     * @param int $limitItem
     */
    public function setLimitItem($limitItem)
    {
        $this->limitItem = $limitItem;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return float
     */
    public function getLimitMax()
    {
        return $this->limitMax;
    }

    /**
     * @param float $limitMax
     */
    public function setLimitMax($limitMax)
    {
        $this->limitMax = $limitMax;
    }

    /**
     * @return float
     */
    public function getLimitMin()
    {
        return $this->limitMin;
    }

    /**
     * @param float $limitMin
     */
    public function setLimitMin($limitMin)
    {
        $this->limitMin = $limitMin;
    }

    /**
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param float $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
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
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var float
     *
     * @ORM\Column(name="limit_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $limitMax;

    /**
     * @var float
     *
     * @ORM\Column(name="limit_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $limitMin;

    /**
     * @var float
     *
     * @ORM\Column(name="default_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $defaultValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

