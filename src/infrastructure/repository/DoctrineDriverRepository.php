<?php

namespace App\infrastructure\repository;

use App\domain\Driver;
use App\domain\DriverRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Driver>
 */
class DoctrineDriverRepository extends ServiceEntityRepository implements DriverRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Driver::class);
    }

    public function findAll(): array
    {
        return parent::findAll();
    }

}
