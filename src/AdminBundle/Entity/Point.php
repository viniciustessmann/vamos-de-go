<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Point
 *
 * @ORM\Table(name="point")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PointRepository")
 */
class Point
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
     * @var string
     *
     * @ORM\Column(name="address", type="string")
     */
    private $address;

     /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float")
     */
    private $lat;

    /**
     * @var float
     *
     * @ORM\Column(name="lng", type="float")
     */
    private $lng;

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
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

     /**
     * set Address.
     *
     * @return string
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get lat.
     *
     * @return float
     */
    public function getlat()
    {
        return $this->lat;
    }

     /**
     * set lat.
     *
     * @return float
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Get lng.
     *
     * @return float
     */
    public function getlng()
    {
        return $this->lng;
    }

     /**
     * set lng.
     *
     * @return float
     */
    public function setlng($lng)
    {
        $this->lng = $lng;
    }
}
