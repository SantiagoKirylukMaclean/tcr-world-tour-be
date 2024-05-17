<?php

namespace App\infrastructure\controller\dto;

class CreateRaceDTO
{
    private string $raceId;
    private string $driverId;
    /**
     * @Type("array<App\Infrastructure\Controller\Dto\CreateResultDTO>")
     */
    private array $results = [];

    // Getters and setters
    public function getRaceId(): string
    {
        return $this->raceId;
    }

    public function setRaceId(string $raceId): void
    {
        $this->raceId = $raceId;
    }

    public function getDriverId(): string
    {
        return $this->driverId;
    }

    public function setDriverId(string $driverId): void
    {
        $this->driverId = $driverId;
    }

    /**
     * @return CreateResultDTO[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param CreateResultDTO[] $results
     */
    public function setResults(array $results): void
    {
        $this->results = $results;
    }
}