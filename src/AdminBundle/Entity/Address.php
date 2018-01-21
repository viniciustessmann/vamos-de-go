<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="address", type="string")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string")
     */
    private $cep;

    /**
     * @ORM\ManyToOne(targetEntity="Neighborhood", inversedBy="address")
     * @ORM\JoinColumn(name="neighborhood_id", referencedColumnName="id")
     */
    private $neighborhood;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="Address")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNeighborhood(Neighborhood $neighborhood)
    {
        $this->neighborhood = $neighborhood;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }
}
