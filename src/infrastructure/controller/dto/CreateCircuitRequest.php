<?php

namespace App\infrastructure\controller\dto;

use Symfony\Component\HttpFoundation\Request;

class CreateCircuitRequest implements RequestDTO
{

    private string $city;
    private string $longitudeInMeters;

    public function __construct(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $this->city = $data['city'];
        $this->longitudeInMeters = $data['longitudeInMeters'];
    }

    public function getLongitudeInMeters(): string
    {
        return $this->longitudeInMeters;
    }

    public function getCity(): string
    {
        return $this->city;
    }
}