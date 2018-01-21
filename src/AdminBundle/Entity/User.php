<?php
// src/AppBundle/Entity/User.php

namespace AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;

     /**
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="User")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;


    public function __construct()
    {
        parent::__construct();
    }

    public function getUSerEmail() 
    {
        return $this->useremail;
    }

    public function getName(){
        return $this->name;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone)
    {

    }
    
    /**
     * set Created.
     *
     * @return string
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}