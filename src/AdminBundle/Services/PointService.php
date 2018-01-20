<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Point;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PointService
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
     * Saves a Point entity.
     *
     * @param Point $point
     */
    public function save(Point $point)
    {   
        $this->em->persist($point);
        $this->em->flush();
    }

    /**
     * Deletes a Point point.
     *
     * @param Point $point
     */
    public function delete(Point $point)
    {
        $this->em->remove($point);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Point::class)->findAll();
    }
}
