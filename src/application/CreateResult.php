<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\DriverRepository;
use App\domain\RaceRepository;
use App\domain\ResultRepository;
use App\infrastructure\controller\dto\CreateResultDTO;
use App\infrastructure\controller\dto\CreateSessionDTO;
use App\infrastructure\Entity\Race;
use App\infrastructure\Entity\Result;
use DateTime;
use DateTimeZone;

class CreateResult
{

    private ResultRepository $resultRepository;
    private RaceRepository $raceRepository;
    private DriverRepository $driverRepository;
    public function __construct(ResultRepository $resultRepository, RaceRepository $raceRepository, DriverRepository $driverRepository)
    {
        $this->resultRepository = $resultRepository;
        $this->raceRepository = $raceRepository;
        $this->driverRepository = $driverRepository;
    }

    public function createResult(array $createRacetDTO): void
    {
        foreach ($createRacetDTO as $resultDTO) {
            $race = $this->raceRepository->obtainRaceById($resultDTO->getRaceId());
            $driver = $this->driverRepository->obtainDriverById($resultDTO->getDriverId());
            foreach ($resultDTO->getResults() as $resultRaceDTO){
                $result = new Result();
                $result->setRace($race);
                $result->setDriver($driver);
                //TODO: how to set result dto as CreateResultDTO
                $result->setTypeSession($resultRaceDTO['session_type']);
                $result->setPosition($resultRaceDTO['position']);
                $result->setPoints($resultRaceDTO['points']);

                $this->resultRepository->createResult($result);
            }
        }
    }


}

