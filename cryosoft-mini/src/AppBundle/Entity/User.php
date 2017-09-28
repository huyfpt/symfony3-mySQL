<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="lnk_langauge_user", columns={"id_language"}), @ORM\Index(name="lnk_money_user", columns={"id_monytary"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="userRole", type="boolean", nullable=false)
     */
    private $userrole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Money
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Money")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_monytary", referencedColumnName="id")
     * })
     */
    private $idMonytary;

    /**
     * @var \AppBundle\Entity\Langauge
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Langauge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_language", referencedColumnName="id")
     * })
     */
    private $idLanguage;


}

