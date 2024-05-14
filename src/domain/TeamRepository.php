<?php

namespace App\domain;

interface TeamRepository
{
    public function obtainTeams(): array;

}