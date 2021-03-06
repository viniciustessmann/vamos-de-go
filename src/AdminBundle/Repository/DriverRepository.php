<?php

namespace AdminBundle\Repository;

/**
 * DriverRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DriverRepository extends \Doctrine\ORM\EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('driver')
            ->orderBy('driver.name', 'ASC');
    }
}
