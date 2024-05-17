<?php

namespace App\domain;

use App\infrastructure\Entity\Result;

interface ResultRepository
{
    public function createResult(Result $result): void;

}