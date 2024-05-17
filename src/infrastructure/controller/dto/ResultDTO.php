<?php

namespace App\infrastructure\controller\dto;

class ResultDTO
{
    private string $id;
    private string $position;
    private string $points;
    private DriverDTO $driver;

    public function __construct(string $id, string $position, string $points, DriverDTO $driver)
    {
        $this->id = $id;
        $this->position = $position;
        $this->points = $points;
        $this->driver = $driver;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getPoints(): string
    {
        return $this->points;
    }

    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    public function getDriver(): DriverDTO
    {
        return $this->driver;
    }

    public function setDriver(DriverDTO $driver): void
    {
        $this->driver = $driver;
    }
}