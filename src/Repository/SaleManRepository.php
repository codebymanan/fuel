<?php

namespace App\Repository;

use App\Entity\SaleMan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SaleMan|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaleMan|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaleMan[]    findAll()
 * @method SaleMan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaleManRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SaleMan::class);
    }

    // /**
    //  * @return SaleMan[] Returns an array of SaleMan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SaleMan
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
