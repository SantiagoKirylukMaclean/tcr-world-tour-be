<?php

namespace App\infrastructure\repository;

use App\domain\Circuit;
use App\domain\CircuitRepository;
use App\domain\Race;
use App\domain\RaceRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Race>
 */
class DoctrineRaceRepository extends ServiceEntityRepository implements RaceRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Race::class);
    }

    public function createRace(Race $race): void
    {
        //$this->registry->persist($race);
        parent::getEntityManager()->persist($race);
        parent::getEntityManager()->flush();

    }

    public function obtainRaces(): array
    {
        return parent::findAll();
    }

}
