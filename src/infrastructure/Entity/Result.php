<?php

namespace App\infrastructure\Entity;
use App\infrastructure\repository\DoctrineResultRepository;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity(repositoryClass: DoctrineResultRepository::class)]

class Result
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $id_result;

    #[ORM\ManyToOne(targetEntity: Race::class)]
    #[ORM\JoinColumn(name: 'id_race',referencedColumnName: 'id_race', nullable: false,onDelete: 'CASCADE')]
    private ?Race $race;

    #[ORM\ManyToOne(targetEntity: Driver::class)]
    #[ORM\JoinColumn(name: 'id_driver',referencedColumnName: 'id_driver', nullable: false,onDelete: 'CASCADE')]
    private ?Driver $driver;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $typeSession;

    #[ORM\Column(type: 'integer')]
    private ?int $position;

    #[ORM\Column(type: 'integer')]
    private ?int $points;


    // Getters and setters

    public function getIdResult(): ?string
    {
        return $this->id_result;
    }

    public function __construct()
    {
        $this->id_result = Uuid::uuid4();
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): void
    {
        $this->race = $race;
    }

    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    public function setDriver(?Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function getTypeSession(): ?string
    {
        return $this->typeSession;
    }

    public function setTypeSession(?string $typeSession): void
    {
        $this->typeSession = $typeSession;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }



}
