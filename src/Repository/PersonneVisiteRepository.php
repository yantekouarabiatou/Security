<?php

namespace App\Repository;

use App\Entity\PersonneVisite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonneVisite>
 *
 * @method PersonneVisite|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonneVisite|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonneVisite[]    findAll()
 * @method PersonneVisite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonneVisiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonneVisite::class);
    }

//    /**
//     * @return PersonneVisite[] Returns an array of PersonneVisite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PersonneVisite
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
