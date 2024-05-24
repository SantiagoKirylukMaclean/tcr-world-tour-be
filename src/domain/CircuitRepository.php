<?php

namespace App\domain;

use App\infrastructure\Entity\Circuit;

interface CircuitRepository
{
    public function obtainCircuit(): array;
    public function createCircuit(Circuit $circuit): void;

}