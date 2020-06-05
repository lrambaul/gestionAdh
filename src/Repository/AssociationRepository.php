<?php

namespace App\Repository;

use App\Entity\Association;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Association|null find($id, $lockMode = null, $lockVersion = null)
 * @method Association|null findOneBy(array $criteria, array $orderBy = null)
 * @method Association[]    findAll()
 * @method Association[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssociationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Association::class);
    }

    public function F_profilassociation($id_pers): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " SELECT * FROM association JOIN association_personne ON association.id = association_personne.association_id
                WHERE association_personne.personne_id = :id_pers ";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_pers' => $id_pers]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_associationAdh($repo_adh): array
    {
        $conn = $this->getEntityManager()->getConnection();

        #$id_adh_search=array_column($repo_adh,'id');
        #$id_adh_search=intval($id_adh_search);

            $sql = " SELECT * FROM association JOIN adherent_association ON association.id = adherent_association.association_id
                WHERE adherent_association.adherent_id =:id_adh";

            $stmt = $conn->prepare($sql);
            $stmt->execute(['id_adh' => $repo_adh]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_associationInter($repo_inter): array
    {
        $conn = $this->getEntityManager()->getConnection();

        #$id_inter_search=array_column($repo_inter,'id');
        #$id_inter_search=intval($id_inter_search);

        $sql = " SELECT * FROM association JOIN association_intervenant ON association.id = association_intervenant.association_id
                WHERE association_intervenant.intervenant_id =:repo_inter";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['repo_inter' => $repo_inter]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_associationStruct($repo_struct): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $id_struct_search=array_column($repo_struct,'id');
        $id_struct_search=intval($id_struct_search);

        $sql = " SELECT * FROM association WHERE id_structure_id =:repo_struct";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['repo_struct' => $id_struct_search]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_repoAsso($id_asso): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " SELECT * FROM association WHERE id =:id_asso";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_asso' => $id_asso]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }



   /* public function F_suppAdhGroupe($id_Adh): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " DELETE FROM adherent_groupe WHERE adherent_id =:id_Adh";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_Adh' => $id_Adh]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_suppAdhAsso($id_Adh): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " DELETE FROM adherent_association WHERE adherent_id =:id_Adh";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_Adh' => $id_Adh]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function F_suppAdh($id_Adh): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = " DELETE FROM adherent WHERE id =:id_Adh";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_Adh' => $id_Adh]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }*/

    // /**
    //  * @return Association[] Returns an array of Association objects
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
    public function findOneBySomeField($value): ?Association
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
