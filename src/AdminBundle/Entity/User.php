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

    /**
     * @var string
     *
     * @ORM\Column(name="useremail", type="string")
     */
    private $useremail;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getUSerEmail() 
    {
        return $this->useremail;
    }
}