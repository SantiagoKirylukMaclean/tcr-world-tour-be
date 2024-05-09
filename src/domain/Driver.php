<?php

namespace App\domain;
use App\infrastructure\repository\DriverRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DriverRepository::class)]

class Driver
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'string', length: 36)]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $firstName;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $lastName;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isDnf;

    // Getters and setters

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getIsDnf(): ?bool
    {
        return $this->isDnf;
    }

    public function setIsDnf(bool $isDnf): self
    {
        $this->isDnf = $isDnf;
        return $this;
    }
}