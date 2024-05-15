<?php

namespace App\application;

use App\domain\RaceRepository;
use App\domain\TeamRepository;
use App\infrastructure\controller\dto\RaceDTO;
use App\infrastructure\controller\dto\CircuitDTO;

class ObtainRaces
{

    private RaceRepository $raceRepository;
    public function __construct(RaceRepository $raceRepository)
    {
        $this->raceRepository = $raceRepository;
    }
    public function obtainRaces(): array
    {
        $races = $this->raceRepository->obtainRaces();

        $RaceDTOs = [];

        foreach ($races as $race) {
            $RaceDTOs[] = new RaceDTO(
                $race->getId(),
                new CircuitDTO(
                    $race->getCircuit()->getId(),
                    $race->getCircuit()->getCity(),
                    $race->getCircuit()->getLongitudeInMeters()
                ),
                $race->getDate()
            );
        }
        return $RaceDTOs;

    }
}

