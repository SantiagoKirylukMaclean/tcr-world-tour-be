<?php

namespace App\application;

use App\domain\RaceRepository;
use App\infrastructure\controller\dto\DriverDTO;
use App\infrastructure\controller\dto\RaceDTO;
use App\infrastructure\controller\dto\CircuitDTO;
use App\infrastructure\controller\dto\ResultDTO;
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
            $resultDTOs = [];
            foreach ($race->getResults() as $result) {
                $resultDTOs[] = new ResultDTO(
                    $result->getIdResult(),
                    $result->getposition(),
                    $result->getPoints(),
                    $result->getTypeSession(),
                    new DriverDTO(
                        $result->getDriver()->getId(),
                        $result->getDriver()->getFirstName(),
                        $result->getDriver()->getLastName(),
                        $result->getDriver()->getIsDnf()
                    )
                );
            }
            $RaceDTOs[] = new RaceDTO(
                $race->getIdRace(),
                new CircuitDTO(
                    $race->getCircuit()->getIdCircuit(),
                    $race->getCircuit()->getCity(),
                    $race->getCircuit()->getLongitudeInMeters()
                ),
                $race->getDate(),
                $resultDTOs
            );
        }
        return $RaceDTOs;

    }
}

