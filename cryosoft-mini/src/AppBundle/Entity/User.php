<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="lnk_langauge_user", columns={"id_language"}), @ORM\Index(name="lnk_money_user", columns={"id_monytary"})})
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return bool
     */
    public function getUserrole()
    {
        return $this->userrole;
    }

    /**
     * @param bool $userrole
     */
    public function setUserrole($userrole)
    {
        $this->userrole = $userrole;
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
     * @return Money
     */
    public function getIdMonytary()
    {
        return $this->idMonytary;
    }

    /**
     * @param Money $idMonytary
     */
    public function setIdMonytary($idMonytary)
    {
        $this->idMonytary = $idMonytary;
    }

    /**
     * @return Langauge
     */
    public function getIdLanguage()
    {
        return $this->idLanguage;
    }

    /**
     * @param Langauge $idLanguage
     */
    public function setIdLanguage($idLanguage)
    {
        $this->idLanguage = $idLanguage;
    }

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
    public function __toString()
    {
        return  $this->username;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        return null;
    }

}

