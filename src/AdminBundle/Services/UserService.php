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
}
