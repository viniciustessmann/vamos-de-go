<?php

namespace AdminBundle\Repository;

/**
 * PointRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PointRepository extends \Doctrine\ORM\EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('point')
            ->orderBy('point.name', 'ASC');
    }
}
