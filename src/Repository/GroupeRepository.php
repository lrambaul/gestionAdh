<?php

namespace App\Repository;

use App\Entity\Groupe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Groupe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Groupe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Groupe[]    findAll()
 * @method Groupe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Groupe::class);
    }

    public function F_GroupeAdh($repo_adh): array
    {
        $conn = $this->getEntityManager()->getConnection();

        #$id_adh=array_column($repo_adh,'id');
        #$id_adh=intval($id_adh);

        $sql = "SELECT * FROM Groupe JOIN adherent_groupe ON groupe.id = adherent_groupe.groupe_id WHERE adherent_groupe.adherent_id=:id_adh";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_adh' => $repo_adh]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

/*    public function F_GroupeInter($repo_inter): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $id_inter=array_column($repo_inter,'id');
        $id_inter=intval($id_inter);

        $sql = "SELECT * FROM Groupe JOIN groupe_intervenant ON groupe.id = groupe_intervenant.groupe_id WHERE groupe_intervenant.intervenant_id=:id_inter";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_inter' => $id_inter]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }*/

    // /**
    //  * @return Groupe[] Returns an array of Groupe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Groupe
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
