<?php

namespace App\application;

use App\domain\DriverRepository;
use App\infrastructure\controller\dto\DriverDTO;

class ObtainDrivers
{

    private DriverRepository $driverRepository;
    public function __construct(DriverRepository $driverRepository)
    {
        $this->driverRepository = $driverRepository;
    }

    public function obtainDrivers(): array
    {
        $drivers = $this->driverRepository->findAll();

        $driverDTOs = [];

        foreach ($drivers as $driver) {
            $driverDTOs[] = new DriverDTO(
                $driver->getId(),
                $driver->getFirstName(),
                $driver->getLastName(),
                $driver->getIsDnf()
            );
        }
        return $driverDTOs;

    }
}

