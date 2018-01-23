<?php
// src/AppBundle/Entity/User.php

namespace AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *  * @ORM\AttributeOverrides({
 *     @ORM\AttributeOverride(name="username", column=@ORM\Column(type="string", name="username", length=255, unique=false)),
*      @ORM\AttributeOverride(name="usernameCanonical", column=@ORM\Column(type="string", name="username_canonical", length=255, unique=false)),
 * })
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;


      /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    private $phone;


     /**
     * @var string
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

     /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", nullable=true)
     */
    private $cpf;

     /**
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="user")
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

    public function setName($name) 
    {
        return $this->name = $name;
    }

    public function setUsername($name) 
    {
        return $this->username = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf)
    {   
        $this->cpf = $cpf;
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

    public function getCreated()
    {
        return $this->created;
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