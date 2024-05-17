<?php

namespace App\application;

use App\domain\CircuitRepository;

use App\infrastructure\controller\dto\CircuitDTO;

class ObtainCircuit
{

    private CircuitRepository $circuitRepository;
    public function __construct(CircuitRepository $circuitRepository)
    {
        $this->circuitRepository = $circuitRepository;
    }

    public function obtainCircuit(): array
    {
        $circuits = $this->circuitRepository->obtainCircuit();

        $teamsDTOs = [];

        foreach ($circuits as $circuit) {
            $teamsDTOs[] = new circuitDTO(
                $circuit->getIdCircuit(),
                $circuit->getCity(),
                $circuit->getLongitudeInMeters()
            );
        }
        return $teamsDTOs;

    }
}

