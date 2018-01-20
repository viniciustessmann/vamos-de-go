<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Neighborhood;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NeighborhoodService
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
     * Saves a Neighborhood entity.
     *
     * @param Neighbordhood $neighborhood
     */
    public function save(Neighborhood $neighborhood)
    {   
        $this->em->persist($neighborhood);
        $this->em->flush();
    }

    /**
     * Deletes a Neighbordhood entity.
     *
     * @param Neighbordhood $neighborhood
     */
    public function delete(Neighborhood $neighborhood)
    {
        $this->em->remove($neighborhood);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Neighborhood::class)->findAll();
    }

    public function findById($id)
    {
        return $this->em->getRepository(Neighborhood::class)->findOneById($id);
    }

}
