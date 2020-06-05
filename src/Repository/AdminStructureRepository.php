<?php

namespace App\Repository;

use App\Entity\AdminStructure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdminStructure|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminStructure|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminStructure[]    findAll()
 * @method AdminStructure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminStructureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminStructure::class);
    }

    // /**
    //  * @return AdminStructure[] Returns an array of AdminStructure objects
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
    public function findOneBySomeField($value): ?AdminStructure
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
