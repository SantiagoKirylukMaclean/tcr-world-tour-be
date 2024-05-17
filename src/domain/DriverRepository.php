<?php

namespace App\domain;

use App\infrastructure\Entity\Driver;

interface DriverRepository
{
    public function findAll(): array;
    public function obtainDriverById(string $id): Driver;

}