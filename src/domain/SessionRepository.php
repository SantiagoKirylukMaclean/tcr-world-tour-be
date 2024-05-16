<?php

namespace App\domain;

use App\infrastructure\Entity\Session;

interface SessionRepository
{
    public function createSession(Session $session): void;
}