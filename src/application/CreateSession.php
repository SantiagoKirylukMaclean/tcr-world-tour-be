<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\RaceRepository;
use App\domain\SessionRepository;
use App\infrastructure\controller\dto\CreateSessionDTO;
use App\infrastructure\Entity\Race;
use App\infrastructure\Entity\Session;
use DateTime;
use DateTimeZone;

class CreateSession
{

    private RaceRepository $raceRepository;
    private SessionRepository $sessionRepository;
    public function __construct(RaceRepository $raceRepository, SessionRepository $sessionRepository)
    {
        $this->raceRepository = $raceRepository;
        $this->sessionRepository = $sessionRepository;
    }

    public function createSession(CreateSessionDTO $data): void
    {

        $race = $this->raceRepository->obtainRaceById($data->getRaceId());
        $timezone = new DateTimeZone('Europe/Madrid');
        $session = new Session();
        $session->setRace($race);
        $session->setDate(new DateTime('now', $timezone));
        $session->setType('Qualifying');
        $this->sessionRepository->createSession($session);
    }
}

