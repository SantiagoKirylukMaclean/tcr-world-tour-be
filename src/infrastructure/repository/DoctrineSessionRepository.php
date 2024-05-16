<?php

namespace App\infrastructure\repository;

use App\domain\SessionRepository;
use App\infrastructure\Entity\Session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Session>
 */
class DoctrineSessionRepository extends ServiceEntityRepository implements SessionRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    public function createSession(Session $session): void
    {
        parent::getEntityManager()->persist($session);
        parent::getEntityManager()->flush();
    }

}
