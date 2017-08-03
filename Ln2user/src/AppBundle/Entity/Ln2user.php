<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ln2user
 *
 * @ORM\Table(name="ln2user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Ln2userRepository")
 */
class Ln2user implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usernam", type="string", length=255, nullable=true)
     */
    private $usernam;

    /**
     * @var string
     *
     * @ORM\Column(name="userpass", type="string", length=255, nullable=true)
     */
    private $userpass;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usernam
     *
     * @param string $usernam
     *
     * @return Ln2user
     */
    public function setUsernam($usernam)
    {
        $this->usernam = $usernam;

        return $this;
    }

    /**
     * Get usernam
     *
     * @return string
     */
    public function getUsernam()
    {
        return $this->usernam;
    }

    /**
     * Set userpass
     *
     * @param string $userpass
     *
     * @return Ln2user
     */
    public function setUserpass($userpass)
    {
        $this->userpass = $userpass;

        return $this;
    }

    /**
     * Get userpass
     *
     * @return string
     */
    public function getUserpass()
    {
        return $this->userpass;
    }
    public function getRoles()
    {
        
       return ['ROLE_USER'];
    }
    public function getPassword()
    {
        return $this->userpass;
    }
    public function getUsername()
    {
        return $this->usernam;
    }
    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
        return null;
    }
}


