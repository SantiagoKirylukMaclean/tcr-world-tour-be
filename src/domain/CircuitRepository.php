<?php

namespace App\domain;

interface CircuitRepository
{
    public function obtainCircuit(): array;

}