<?php

namespace App\Repository;

use App\Entity\Pos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pos[]    findAll()
 * @method Pos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pos::class);
    }

    // /**
    //  * @return Pos[] Returns an array of Pos objects
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
    public function findOneBySomeField($value): ?Pos
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
