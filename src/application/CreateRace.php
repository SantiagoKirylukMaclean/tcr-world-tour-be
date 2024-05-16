<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\RaceRepository;
use App\infrastructure\Entity\Race;
use DateTime;
use DateTimeZone;

class CreateRace
{

    private RaceRepository $raceRepository;
    private CircuitRepository $circuitRepository;
    public function __construct(RaceRepository $raceRepository, CircuitRepository $circuitRepository)
    {
        $this->raceRepository = $raceRepository;
        $this->circuitRepository = $circuitRepository;
    }

    public function createRace(): void
    {
        $circuits = $this->circuitRepository->obtainCircuit();
        $circuit = $circuits[0];
        $timezone = new DateTimeZone('Europe/Madrid');
        $date = new DateTime('2024-04-21', $timezone);
        $race = new Race();
        $race->setCircuit($circuit);
        $race->setDate($date);
        $this->raceRepository->createRace($race);
    }
}

