<?php

namespace App\infrastructure\controller\dto;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class CreateCircuitRequest implements RequestDTO
{

    #[
        assert\NotBlank,
        assert\Length(min: 3, max: 255)
    ]
    private string $city;
    #[
        assert\NotBlank,
        assert\Length(min: 3, max: 255)
    ]
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