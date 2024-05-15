<?php
namespace App\infrastructure\controller\dto;
class RaceDTO
{
    private string $id;
    private CircuitDTO $circuit;
    private \DateTimeInterface $dateTime;


    public function __construct(string $id, CircuitDTO $circuit, \DateTimeInterface $dateTime)
    {
        $this->id = $id;
        $this->circuit = $circuit;
        $this->dateTime = $dateTime;
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

}