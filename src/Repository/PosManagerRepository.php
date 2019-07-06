<?php

namespace App\Repository;

use App\Entity\PosManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PosManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method PosManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method PosManager[]    findAll()
 * @method PosManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PosManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PosManager::class);
    }

    // /**
    //  * @return PosManager[] Returns an array of PosManager objects
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
    public function findOneBySomeField($value): ?PosManager
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
