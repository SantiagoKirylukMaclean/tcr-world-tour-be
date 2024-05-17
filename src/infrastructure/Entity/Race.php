<?php

namespace App\infrastructure\Entity;

use App\infrastructure\repository\DoctrineRaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

#[ORM\Entity(repositoryClass: DoctrineRaceRepository::class)]
class Race
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $id_race;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $name;

    #[ORM\ManyToOne(targetEntity: Circuit::class)]
    #[ORM\JoinColumn(name: 'id_circuit', referencedColumnName: 'id_circuit', nullable: false, onDelete: 'CASCADE')]
    private ?Circuit $circuit;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\OneToMany(targetEntity: 'Result', mappedBy:'race')]
    private Collection $results;

    // Getters and setters

    public function getIdRace(): ?string
    {
        return $this->id_race;
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
        $this->id_race = Uuid::uuid4();
        $this->results = new ArrayCollection();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getResults(): ArrayCollection|Collection
    {
        return $this->results;
    }

    public function setResults(ArrayCollection|Collection $results): void
    {
        $this->results = $results;
    }


}
