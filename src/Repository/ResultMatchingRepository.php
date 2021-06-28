<?php

namespace App\Repository;

use App\Entity\ResultMatching;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResultMatching|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResultMatching|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResultMatching[]    findAll()
 * @method ResultMatching[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultMatchingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResultMatching::class);
    }

    // /**
    //  * @return ResultMatching[] Returns an array of ResultMatching objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResultMatching
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
