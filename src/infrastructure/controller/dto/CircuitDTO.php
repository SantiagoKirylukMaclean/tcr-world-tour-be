<?php
namespace App\infrastructure\controller\dto;
class CircuitDTO
{
    private string $id;
    private string $city;
    private string $longitudeInMeters;


    public function __construct(string $id, string $city, string $longitudeInMeters)
    {
        $this->id = $id;
        $this->city = $city;
        $this->longitudeInMeters = $longitudeInMeters;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getLongitudeInMeters(): ?string
    {
        return $this->longitudeInMeters;
    }
}