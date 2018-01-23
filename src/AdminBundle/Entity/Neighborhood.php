<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Neighborhood
 *
 * @ORM\Table(name="neighborhood")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\NeighborhoodRepository")
 */
class Neighborhood
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
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="neighborhood")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Point", mappedBy="neighborhood")
     */
    private $points;


    public function __construct()
    {
        $this->address = new ArrayCollection();
        $this->points = new ArrayCollection();
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

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAddress($address)
    {
        $this->address[] = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setPoint(Point $point)
    {
        $this->points[] = $point;
    }

    public function getPoint() {
        return $this->points;
    }
}
