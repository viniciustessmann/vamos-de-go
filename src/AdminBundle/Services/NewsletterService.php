<?php
namespace AdminBundle\Services;

use Doctrine\ORM\EntityManagerInterface;
use AdminBundle\Entity\Newsletter;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class NewsletterService
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
     * Saves a Newsletter entity.
     *
     * @param Newsletter $newsletter
     */
    public function save(Newsletter $newsletter)
    {   
        $now = new \DateTime(date('Y-m-d H:i:s'));
        if ($newsletter->getId() === null) {
            $newsletter->setCreated($now);
        }

        $this->em->persist($newsletter);
        $this->em->flush();
    }

    /**
     * Deletes a Newsletter newsletter.
     *
     * @param Newsletter $newsletter
     */
    public function delete(Newsletter $newsletter)
    {
        $this->em->remove($newsletter);
        $this->em->flush();
    }


    /**
     * Gets all Post data.
     *
     * @return array
     */
    public function findAll()
    {
        return $this->em->getRepository(Newsletter::class)->findAll();
    }

    public function existsEmail($email) {
        return $this->em->getRepository(Newsletter::class)->getCount($email);
    }
}
