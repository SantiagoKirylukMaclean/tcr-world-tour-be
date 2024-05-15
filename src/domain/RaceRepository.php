<?php

namespace App\domain;

interface RaceRepository
{
    public function createRace(Race $race): void;
    public function obtainRaces(): array;

}