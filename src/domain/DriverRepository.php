<?php

namespace App\domain;

interface DriverRepository
{
    public function findAll(): array;

}