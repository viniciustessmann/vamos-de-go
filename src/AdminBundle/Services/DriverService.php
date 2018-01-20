<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Driver;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DriverService
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
     * Saves a Driver entity.
     *
     * @param Driver $driver
     */
    public function save(Driver $driver)
    {   
        $now = new \DateTime(date('Y-m-d H:i:s'));
        if ($driver->getId() === null) {
            $driver->setCreated($now);
        }

        $this->em->persist($driver);
        $this->em->flush();
    }

    /**
     * Deletes a Driver driver.
     *
     * @param Driver $driver
     */
    public function delete(Driver $driver)
    {
        $this->em->remove($driver);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Driver::class)->findAll();
    }
}
