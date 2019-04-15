<?php

namespace App\Repository;

use App\Entity\Editeurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Editeurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Editeurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Editeurs[]    findAll()
 * @method Editeurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditeursRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Editeurs::class);
    }

    // /**
    //  * @return Editeurs[] Returns an array of Editeurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Editeurs
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
