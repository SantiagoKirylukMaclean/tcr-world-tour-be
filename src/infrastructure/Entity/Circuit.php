<?php

namespace App\infrastructure\Entity;

use App\infrastructure\repository\DoctrineCircuitRepository;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity(repositoryClass: DoctrineCircuitRepository::class)]
class Circuit
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $id_circuit;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $city;

    #[ORM\Column(type: 'smallint')]
    private ?int $longitudeInMeters;

    // Getters and setters

    public function getIdCircuit(): ?string
    {
        return $this->id_circuit;
    }

    public function __construct()
    {
        $this->id_circuit = Uuid::uuid4();
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getLongitudeInMeters(): ?int
    {
        return $this->longitudeInMeters;
    }

    public function setLongitudeInMeters(int $longitudeInMeters): self
    {
        $this->longitudeInMeters = $longitudeInMeters;
        return $this;
    }
}
