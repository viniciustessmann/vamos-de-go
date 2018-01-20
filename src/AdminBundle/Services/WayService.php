<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Way;
use AdminBundle\Entity\Passenger;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WayService
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
     *
     */
    public function findById($id)
    {   
        return $this->em->getRepository(Way::class)->find($id);
    }

    /**
     * Saves a Way entity.
     *
     * @param Way $way
     */
    public function save(Way $way)
    {   
        $this->em->persist($way);
        $this->em->flush();
    }

    /**
     * Deletes a Way way.
     *
     * @param Way $way
     */
    public function delete(Way $way)
    {
        $this->em->remove($way);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Way::class)->findAll();
    }
}
