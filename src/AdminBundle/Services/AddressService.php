<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Address;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AddressService
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
     * Saves a Address entity.
     *
     * @param Address $address
     */
    public function save(Address $address)
    {   
        $now = new \DateTime(date('Y-m-d H:i:s'));
        if ($address->getId() === null) {
            $address->setCreated($now);
        }

        $this->em->persist($address);
        $this->em->flush();
    }

    /**
     * Deletes a Adress address.
     *
     * @param Adress $address
     */
    public function delete(Address $address)
    {
        $this->em->remove($address);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Address::class)->findAll();
    }

    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findByUser($user_id)
    {
        return $this->em->getRepository(Address::class)->find(['user_id' => $user_id]);
    }
}
