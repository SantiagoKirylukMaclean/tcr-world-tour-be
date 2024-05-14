<?php
namespace App\infrastructure\controller\dto;
class TeamDTO
{
    private string $id;
    private string $name;
    private string $logo;
    private array $colors;

    public function __construct(string $id, string $name, string $logo, array $colors)
    {
        $this->id = $id;
        $this->name = $name;
        $this->logo = $logo;
        $this->colors = $colors;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function getColors(): ?array
    {
        return $this->colors;
    }
}