<?php

namespace App\application;

use App\domain\CircuitRepository;
use App\domain\RaceRepository;
use App\infrastructure\Entity\Circuit;
use App\infrastructure\Entity\Race;
use DateTime;
use DateTimeZone;

class CreateCircuit
{

    private CircuitRepository $circuitRepository;
    public function __construct(CircuitRepository $circuitRepository)
    {
        $this->circuitRepository = $circuitRepository;
    }

    public function createCircuit(): void
    {
        $circuit = new Circuit(
            null,
            'barcelona-catalunya',
            4.655
        );

        $this->circuitRepository->createCircuit($circuit);
    }
}

