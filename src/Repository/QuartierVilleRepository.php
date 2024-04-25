<?php

namespace App\Repository;

use App\Entity\QuartierVille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<QuartierVille>
 *
 * @method QuartierVille|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuartierVille|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuartierVille[]    findAll()
 * @method QuartierVille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuartierVilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuartierVille::class);
    }

//    /**
//     * @return QuartierVille[] Returns an array of QuartierVille objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('q.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?QuartierVille
//    {
//        return $this->createQueryBuilder('q')
//            ->andWhere('q.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
