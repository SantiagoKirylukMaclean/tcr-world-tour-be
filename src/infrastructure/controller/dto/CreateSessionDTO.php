<?php

namespace App\infrastructure\controller\dto;

class CreateSessionDTO
{
    private string $raceId;

    public function __construct(string $raceId)
    {
        $this->raceId = $raceId;
    }

    public function getRaceId(): ?string
    {
        return $this->raceId;
    }

}