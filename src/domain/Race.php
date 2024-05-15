<?php

namespace App\domain;

use App\infrastructure\repository\DoctrineRaceRepository;
use App\infrastructure\repository\RaceRepositoryOLD;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity(repositoryClass: DoctrineRaceRepository::class)]
class Race
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $id;

    #[ORM\ManyToOne(targetEntity: Circuit::class)]
    private $circuit;

    #[ORM\Column(type: 'datetime')]
    private $date;

    // Getters and setters

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCircuit(): ?Circuit
    {
        return $this->circuit;
    }

    public function setCircuit(?Circuit $circuit): self
    {
        $this->circuit = $circuit;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }
}
