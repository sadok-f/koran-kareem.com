<?php

namespace Sf\QuranBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AdhkarRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdhkarRepository extends EntityRepository
{
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        $orderByOrdering = array('name' => 'ASC');
        $orderBy = $orderBy == null ? $orderByOrdering : array_merge($orderBy, $orderByOrdering);
        return parent::findBy($criteria, $orderBy, $limit, $offset);
    }

    public function getRandom($limit = 8)
    {
        $list = $this->findBy(array());
        shuffle($list);
        $list = array_slice($list, 0, $limit);
        return $list;
    }

}
