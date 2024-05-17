<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\DriverRepository;
use App\domain\RaceRepository;
use App\domain\ResultRepository;
use App\domain\SessionRepository;
use App\infrastructure\controller\dto\CreateSessionDTO;
use App\infrastructure\Entity\Race;
use App\infrastructure\Entity\Result;
use App\infrastructure\Entity\Session;
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

    public function createResult(): void
    {

        $race = $this->raceRepository->obtainRaceById('e20f3cbb-4d06-4c51-b2cc-69ca0af8660b');
        $driver = $this->driverRepository->obtainDriverById('1d1e39f1-3173-469d-8d51-b9b0c8553998');
        $result = new Result();
        $result->setRace($race);
        $result->setDriver($driver);
        $result->setTypeSession('Qualifying');
        $result->setPosition(9);
        $result->setPoints(0);

        $this->resultRepository->createResult($result);
    }


}

