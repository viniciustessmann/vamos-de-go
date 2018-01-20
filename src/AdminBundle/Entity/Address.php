<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\ManyToOne(targetEntity="Passenger", inversedBy="address")
     * @ORM\JoinColumn(name="passenger_id", referencedColumnName="id")
     */
    private $passenger;

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

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setNeighborhood(Neighborhood $neighborhood)
    {
        $this->neighborhood = $neighborhood;
    }

    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }
}
