<?php

namespace App\infrastructure\repository;

use App\domain\Circuit;
use App\domain\CircuitRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Circuit>
 */
class DoctrineCircuitRepository extends ServiceEntityRepository implements CircuitRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Circuit::class);
    }

    public function obtainCircuit(): array
    {
        return $this->findAll();
    }

}
