<?php
// src/AppBundle/Entity/User.php

namespace AdminBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getUSerEmail() 
    {
        return $this->useremail;
    }

    public function getName(){
        return $this->name;
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
}