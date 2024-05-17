<?php

namespace App\infrastructure\controller\dto;

class CreateResultDTO
{
    private string $sessionType;
    private int $position;
    private int $points;

    // Getters and setters
    public function getSessionType(): string
    {
        return $this->sessionType;
    }

    public function setSessionType(string $sessionType): void
    {
        $this->sessionType = $sessionType;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getPoints(): int
    {
        return $this->points;
    }

    public function setPoints(int $points): void
    {
        $this->points = $points;
    }
}