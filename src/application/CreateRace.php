<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\Race;
use App\domain\RaceRepository;
use App\infrastructure\controller\dto\TeamDTO;
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
//    {
//        $teams = $this->teamRepository->obtainTeams();
//
//        $teamsDTOs = [];
//
//        foreach ($teams as $team) {
//            $teamsDTOs[] = new teamDTO(
//                $team->getId(),
//                $team->getName(),
//                $team->getLogo(),
//                $team->getColors()
//            );
//        }
//        return $teamsDTOs;
//
//    }
}

