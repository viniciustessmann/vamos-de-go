<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Way
 *
 * @ORM\Table(name="way")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\WayRepository")
 */
class Way
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
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;

     /**
     * @var int
     *
     * @ORM\Column(name="min", type="integer")
     */
    private $min;

     /**
     * @var time
     *
     * @ORM\Column(name="start", type="time")
     */
    private $start;

     /**
     * @var time
     *
     * @ORM\Column(name="end", type="time")
     */
    private $end;

    /**
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Point")
     * @ORM\JoinTable(
     *      joinColumns={@ORM\JoinColumn(onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(onDelete="CASCADE")}
     * )
     */
    protected $points;

     /**
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Driver")
     * @ORM\JoinTable(
     *      joinColumns={@ORM\JoinColumn(onDelete="CASCADE")},
     *      inverseJoinColumns={@ORM\JoinColumn(onDelete="CASCADE")}
     * )
     */
    protected $drivers;

    // /**
    //  * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Passenger")
    //  * @ORM\JoinTable(
    //  *      joinColumns={@ORM\JoinColumn(onDelete="CASCADE")},
    //  *      inverseJoinColumns={@ORM\JoinColumn(onDelete="CASCADE")}
    //  * )
    //  */
    // protected $passengers;

    public function __construct()
    {
        $this->points = new ArrayCollection();
        // $this->drivers = new ArrayCollection();
        // $this->passengers = new ArrayCollection();
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

    /**
     * Set name.
     *
     */
    public function setName($name)
    {
        $this->name = $name;
    }

     /**
     * Get value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value.
     *
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get min.
     *
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set min.
     *
     */
    public function setMin($min)
    {
        $this->min = $min;
    }


    /**
     * Get start.
     *
     * @return time
     */
    public function getStart()
    {
        return $this->start;
    }   


    /**
     * Set start.
     *
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Get end.
     *
     * @return time
     */
    public function getEnd()
    {
        return $this->end;
    }


    /**
     * Set end.
     *
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function setPoints($point)
    {
        $this->points[] = $point;
    }

    // public function getDrivers()
    // {
    //     return $this->drivers;
    // }

    // public function setDrivers($driver)
    // {
    //     $this->drivers[] = $driver;
    // }

    // public function getPassengers()
    // {
    //     return $this->passengers;
    // }

    // public function setPassengers($passenger)
    // {
    //     $this->passengers[] = $passenger;
    // }
}
