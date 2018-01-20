<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Passenger;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PassengerService
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
     * Saves a Passenger assenger.
     *
     * @param Passenger $passenger
     */
    public function save(Passenger $passenger)
    {   
        $now = new \DateTime(date('Y-m-d H:i:s'));
        if ($passenger->getId() === null) {
            $passenger->setCreated($now);
        }

        $this->em->persist($passenger);
        $this->em->flush();
    }

    /**
     * Deletes a Passenger passenger.
     *
     * @param Passenger $passenger
     */
    public function delete(Passenger $passenger)
    {
        $this->em->remove($passenger);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Passenger::class)->findAll();
    }
}
