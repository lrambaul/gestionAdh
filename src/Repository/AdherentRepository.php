<?php

namespace App\Repository;

use App\Entity\Adherent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Adherent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adherent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adherent[]    findAll()
 * @method Adherent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdherentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adherent::class);
    }

    public function F_profiladherent($id_pers): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " SELECT * FROM  Adherent";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['personne_id' => $id_pers]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_IDadherentpers($id_pers): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT * FROM Adherent WHERE personne_id=:id_pers";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_pers' => $id_pers]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_listeAdherent($id_pers): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT * FROM adherent
                JOIN adherent_association ON adherent.id=adherent_association.adherent_id
                JOIN association ON adherent_association.association_id=association.id
                JOIN association_personne ON association.id=association_personne.association_id
                WHERE association_personne.personne_id=:id_pers";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_pers' => $id_pers]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_ListeAdhStruct($Id_structure): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT * FROM adherent
                JOIN adherent_association ON adherent.id=adherent_association.adherent_id
                JOIN association ON adherent_association.association_id=association.id
                JOIN structure ON association.structure_id=structure.id
                WHERE structure.id=:Id_structure";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['Id_structure' => $Id_structure]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }



    // /**
    //  * @return Adherent[] Returns an array of Adherent objects
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
    public function findOneBySomeField($value): ?Adherent
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
