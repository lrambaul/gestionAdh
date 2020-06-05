<?php

namespace App\Repository;

use App\Entity\AdminAsso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdminAsso|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminAsso|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminAsso[]    findAll()
 * @method AdminAsso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminAssoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminAsso::class);
    }

    // /**
    //  * @return AdminAsso[] Returns an array of AdminAsso objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdminAsso
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
