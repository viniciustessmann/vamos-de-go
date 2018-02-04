<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\NewsletterRepository")
 */
class Newsletter
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
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


     /**
     * Set name.
     *
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set email.
     *
     * @return string
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }


     /**
     * Set phone.
     *
     * @return string
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * Get created.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }


     /**
     * Set created.
     *
     * @return string
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
}
