<?php

namespace App\infrastructure\repository;

use App\domain\ResultRepository;
use App\infrastructure\Entity\Result;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Result>
 */
class DoctrineResultRepository extends ServiceEntityRepository implements ResultRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Result::class);
    }

    public function createResult(Result $result): void
    {
        parent::getEntityManager()->persist($result);
        parent::getEntityManager()->flush();
    }

}
