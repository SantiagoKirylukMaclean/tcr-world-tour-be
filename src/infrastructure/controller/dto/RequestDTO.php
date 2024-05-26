<?php

namespace App\infrastructure\controller\dto;

use Symfony\Component\HttpFoundation\Request;

interface RequestDTO
{
    public function __construct(Request $request);
}