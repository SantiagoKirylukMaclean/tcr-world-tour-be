<?php
namespace App\infrastructure\controller\dto;
class DriverDTO
{
    private string $id;
    private string $firstName;
    private string $lastName;
    private bool $isDnf;

    public function __construct(string $id, string $firstName, string $lastName, bool $isDnf)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->isDnf = $isDnf;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getIsDnf(): ?bool
    {
        return $this->isDnf;
    }
}