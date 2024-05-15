<?php

namespace App\domain;

use App\infrastructure\Entity\Race;

interface RaceRepository
{
    public function createRace(Race $race): void;
    public function obtainRaces(): array;

}