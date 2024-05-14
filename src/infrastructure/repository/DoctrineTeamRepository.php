<?php

namespace App\infrastructure\repository;

use App\domain\Team;
use App\domain\TeamRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Team>
 */
class DoctrineTeamRepository extends ServiceEntityRepository implements TeamRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Team::class);
    }

    public function obtainTeams(): array
    {
        return parent::findAll();
    }

}
