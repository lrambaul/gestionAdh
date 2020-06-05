<?php

namespace App\Repository;

use App\Entity\Personne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Personne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personne[]    findAll()
 * @method Personne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personne::class);
    }

    public function F_profilpersonne($id_pers): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " SELECT * FROM  Personne";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_pers' => $id_pers]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_AdherentGroupe($id_grp): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT * FROM Personne
                JOIN adherent ON personne.id=adherent.personne_id
                JOIN adherent_groupe ON adherent.id=adherent_groupe.adherent_id
                WHERE adherent_groupe.groupe_id=:id_grp";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_grp' => $id_grp]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    // /**
    //  * @return Personne[] Returns an array of Personne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Personne
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
