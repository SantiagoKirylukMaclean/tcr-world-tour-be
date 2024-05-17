<?php
namespace App\infrastructure\controller\dto;
use Ramsey\Collection\Collection;

class RaceDTO
{
    private string $id;
    private CircuitDTO $circuit;
    private \DateTimeInterface $dateTime;
    private array $results;


    public function __construct(string $id, CircuitDTO $circuit, \DateTimeInterface $dateTime, array $results)
    {
        $this->id = $id;
        $this->circuit = $circuit;
        $this->dateTime = $dateTime;
        $this->results = $results;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCircuit(): ?CircuitDTO
    {
        return $this->circuit;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function getResults(): ?array
    {
        return $this->results;
    }

    public function setResults(array $results): void
    {
        $this->results = $results;
    }

}