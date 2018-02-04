<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserService
{
    /** @var EntityManagerInterface $em */
    protected $em;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Saves a User entity.
     *
     * @param User $user
     */
    public function save(User $user)
    {   
        $now = new \DateTime(date('Y-m-d H:i:s'));
        if ($user->getId() === null) {
            $user->setCreated($now);
        }

        $user->setUsername($user->getName());

        $this->em->persist($user);
        $this->em->flush();
    }

    /**
     * Deletes a User user.
     *
     * @param User $user
     */
    public function delete(User $user)
    {
        $this->em->remove($user);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(User::class)->findAll();
    }

    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAllByRole($role)
    {
        $query = $this->em->createQuery('SELECT u FROM AdminBundle:User u');
        $users = $query->getResult();
       
        $response = [];
    

        foreach ($users as $user) {

            if(!in_array($role, $user->getRoles())){
                continue;
            }

            $response[] = $user;
        }
        
        return $response;
    }

    public function findOneByCheckEmail($email) {

        return $this->em->getRepository(User::class)->findOneByEmail($email);
    }
}
