<?php

namespace App\Repository;

use App\Entity\MilitaireAffectation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MilitaireAffectation>
 *
 * @method MilitaireAffectation|null find($id, $lockMode = null, $lockVersion = null)
 * @method MilitaireAffectation|null findOneBy(array $criteria, array $orderBy = null)
 * @method MilitaireAffectation[]    findAll()
 * @method MilitaireAffectation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MilitaireAffectationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MilitaireAffectation::class);
    }

//    /**
//     * @return MilitaireAffectation[] Returns an array of MilitaireAffectation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MilitaireAffectation
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
